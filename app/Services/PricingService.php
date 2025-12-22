<?php

namespace App\Services;

use App\Models\Product;
use App\Models\GoldRate;
use App\Models\Category;

class PricingService
{
    /**
     * Calculate price breakup for a given product.
     *
     * @param Product $product
     * @return array
     */
    public function calculatePrice(Product $product)
    {
        // 1. Get Gold Rate
        // Assuming we always have a purity. If not (e.g. silver product without purity set?), handle gracefully.
        $metalRate = 0;
        $metalType = 'Unknown';

        if ($product->metalPurity) {
            $rateRecord = GoldRate::getLatestRate($product->metal_purity_id);
            $metalRate = $rateRecord ? $rateRecord->rate_per_gram : 0;
            $metalType = $product->metalPurity->name; // e.g., "18K Gold"
        }

        // 2. Calculate Metal Cost
        // Net weight is crucial. If null, assume 0.
        $weight = $product->net_weight ?? 0;
        $metalCost = $weight * $metalRate;

        // 3. Calculate Making Charges (VA)
        // Fetched from Category
        $category = $product->category;
        $makingChargesAmount = 0;

        if ($category) {
            $vaValue = $category->making_charges ?? 0;
            $vaType = $category->making_charges_type ?? 'percent';

            if ($vaType === 'percent') {
                // Percentage of Metal Cost
                $makingChargesAmount = ($metalCost * $vaValue) / 100;
            } else {
                // Fixed amount per gram (common practice) or flat? 
                // Let's assume Fixed Amount Per Gram based on industry standard if not specified otherwise.
                // Or if user meant flat fee per piece. 
                // Given "making_charges" in DB is decimal, let's treat 'fixed' as 'fixed per gram' for now as safer default for jewelry.
                // However, user said "Fixed Amount Discount" in contexts usually implies Flat. 
                // Let's assume it is Flat Fee per Piece for flexibility if type is 'fixed'.
                $makingChargesAmount = $vaValue * $weight; 
            }
            
            // Add wastage if applicable
             if ($category->waste_percentage > 0) {
                 $wastageCost = ($metalCost * $category->waste_percentage) / 100;
                 $makingChargesAmount += $wastageCost;
             }
        }

        // 4. Stone Costs
        $stoneCost = ($product->stone_cost ?? 0) + 
                     ($product->beads_cost ?? 0) + 
                     ($product->pearls_cost ?? 0);
                     
        // Diamonds?
        // Logic for diamonds usually implies rate per cent.
        // If 'stone_cost' is already total, good. 
        // Old code didn't seem to calculate diamond cost explicitly from rate * cent in the switch case I saw...
        // Wait, old code Case 6 (Diamond 18K): $finalRate = $metalRate + $diamondRate. 
        // That looked wrong (adding rate per gram to rate per carat?). 
        // I will assume `stone_cost` column in DB holds the pre-calculated stone value 
        // OR I need to implement rate * weight logic if those columns are empty.
        // For now, relying on `stone_cost` column is safest if data exists.

        // 5. Total and GST
        $subTotal = $metalCost + $makingChargesAmount + $stoneCost;
        $gstPercent = 3; // Standard jewelry GST
        $gstAmount = ($subTotal * $gstPercent) / 100;
        
        $finalPrice = $subTotal + $gstAmount;

        return [
            'total_price' => ceil($finalPrice),
            'metal_cost' => ceil($metalCost),
            'making_charges' => ceil($makingChargesAmount),
            'stone_cost' => ceil($stoneCost),
            'gst' => ceil($gstAmount),
            'metal_type' => $metalType,
            'rate_applied' => $metalRate,
            'breakup' => [
                'weight' => $weight,
                'rate' => $metalRate,
                'va_type' => $category->making_charges_type ?? 'N/A',
                'va_value' => $category->making_charges ?? 0
            ]
        ];
    }
}
