<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class PriceCalculator
{
    /**
     * Calculate price breakup for a product.
     *
     * @param string $productCode
     * @param string $tableName
     * @return array [FinalRate, MetalCost, MakingCharges, GST, MetalType]
     */
    public function calculatePrice($productCode, $tableName)
    {
        try {
            $product = DB::table($tableName)->where('product_code', $productCode)->first();

            if (!$product) {
                return [999, 0, 0, 0, 'Unknown']; // Fallback
            }

            $metalPurityId = $product->metalpurity_id;
            $netWeight = $product->net_weight;

            switch ($metalPurityId) {
                case 1: // Silver
                    $metalRate = $this->getRate('metals_rates', '925_silver'); // Using 925_silver as per legacy code function get_normal_silver_rate queries 925_silver from metals_rates
                    // Wait, legacy code: get_normal_silver_rate -> SELECT 925_silver FROM metals_rates.
                    // But maybe there is a normal_silver column? legacy code line 30 says 925_silver.
                    // I will stick to 925_silver.
                    $silverCost = $netWeight * $metalRate;
                    $gstPercent = $this->getGst();
                    $gstAmount = $silverCost * $gstPercent / 100;
                    $finalRate = $silverCost + $gstAmount;
                    return [$finalRate, $silverCost, 0, $gstAmount, 'Silver'];

                case 2: // 925 Silver
                    $metalRate = $this->getRate('metals_rates', '925_silver');
                    $cost = $netWeight * $metalRate;
                    $gstPercent = 3;
                    $gstAmount = $cost * $gstPercent / 100;
                    $finalRate = $cost + $gstAmount;
                    return [$finalRate, $cost, 0, $gstAmount, '925 Silver'];

                case 3: // Rose Gold Silver
                    $metalRate = $this->getRate('metals_rates', 'rosegold_silver');
                    $cost = $netWeight * $metalRate;
                    $gstPercent = 3;
                    $gstAmount = $cost * $gstPercent / 100;
                    $finalRate = $cost + $gstAmount;
                    return [$finalRate, $cost, 0, $gstAmount, 'Rose Gold Silver'];

                case 4: // 18K Gold
                    $metalRate = $this->getRate('goldrate', '18k_1gm');
                    $goldCost = $netWeight * $metalRate;
                    $makingChargePercent = 35; // Hardcoded in legacy
                    $makingCharges = $goldCost * $makingChargePercent / 100;
                    $subTotal = $goldCost + $makingCharges;
                    $gstPercent = 3;
                    $gstAmount = $subTotal * $gstPercent / 100;
                    $finalRate = $subTotal + $gstAmount;
                    return [$finalRate, $goldCost, $makingCharges, $gstAmount, 'Gold'];

                case 5: // 22K Gold
                    $metalRate = $this->getRate('goldrate', '22k_1gm');
                    $goldCost = $netWeight * $metalRate;
                    $makingChargePercent = 35; // Hardcoded in legacy
                    $makingCharges = $goldCost * $makingChargePercent / 100;
                    $subTotal = $goldCost + $makingCharges;
                    $gstPercent = 3;
                    $gstAmount = $subTotal * $gstPercent / 100;
                    $finalRate = $subTotal + $gstAmount;
                    return [$finalRate, $goldCost, $makingCharges, $gstAmount, 'Gold'];

                case 6: // Diamond (18K)
                     // Legacy case 6: $final_rate = $MetalRate+$DiamondRate; where MetalRate is 18k.
                     // It ignores weight? Legacy line 201: $final_rate = $MetalRate+$DiamondRate;
                     // MetalRate = get18krate() which returns 1gm rate.
                     // usage of MetalRate as cost seems suspicious if it's just rate per gram.
                     // But strictly copying legacy logic:
                    $metalRate = $this->getRate('goldrate', '18k_1gm');
                    $diamondRate = $this->getRate('metals_rates', 'diamond_rate');
                    $finalRate = $metalRate + $diamondRate;
                    return [$finalRate, 0, 0, 0, 'Gold'];

                default:
                    return [999, 0, 0, 0, 'Unknown'];
            }

        } catch (\Exception $e) {
            // Log error
            return [999, 0, 0, 0, 'Error'];
        }
    }

    private function getRate($table, $column)
    {
        $record = DB::table($table)->orderBy('updated_on', 'desc')->first(); // Assuming updated_on exists or just first
        // Legacy code uses simple SELECT query, seemingly getting the first row or assuming single row config tables.
        // For goldrate it has updated_on, but legacy `SELECT 18k_1gm FROM goldrate` gets first row.
        // I'll ensure I get the latest if multiple exist, or just first.
        // Let's use first() for single-row config tables pattern.
        
        // Actually, for goldrate, previous edits showed it has history. I should likely get the LATEST one.
       
        // Checking legacy: "SELECT 18k_1gm FROM goldrate" -> No order by.
        // But previously I saw 'goldrate' table has 'updated_on'.
        // I will trust DB::table($table)->first() to match legacy "any row" behavior if I'm unsure,
        // BUT for a "Rate", latest is usually implied.
        // I'll stick to `DB::table($table)->first()->$column` to match legacy exactly if the legacy didn't order.
        // Wait, legacy `get18krate` uses `mysqli_fetch_assoc` on a query without order. It gets the "first" returned.
        
        $record = DB::table($table)->first();
        return $record ? $record->$column : 0;
    }

    private function getGst()
    {
        $record = DB::table('gst')->where('id', 1)->first();
        return $record ? $record->tax_percent : 3;
    }
}
