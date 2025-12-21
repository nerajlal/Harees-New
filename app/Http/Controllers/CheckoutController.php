<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Services\PriceCalculator;

class CheckoutController extends Controller
{
    protected $priceCalculator;

    public function __construct(PriceCalculator $priceCalculator)
    {
        $this->priceCalculator = $priceCalculator;
    }

    public function index()
    {
        $user = Auth::user();
        
        // Fetch cart items
        $cartItems = DB::table('cart')
            ->where('user_id', $user->id)
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Your cart is empty');
        }

        $products = collect();
        $cartTotal = 0;

        foreach ($cartItems as $cartItem) {
            $tableName = $cartItem->table_name;
            // Validate table name to prevent SQL injection (basic check)
             if (!Schema::hasTable($tableName)) {
                continue;
            }

            $product = DB::table($tableName)
                ->where('product_code', $cartItem->product_code)
                ->first();

            if ($product) {
                // Calculate price using helper/service
                $priceData = $this->priceCalculator->calculatePrice(
                    $product->product_code,
                    $tableName
                );
                
                $product->calculated_price = ceil($priceData['total_price']);
                $product->cart_id = $cartItem->id;
                $product->table_name = $tableName;
                $product->quantity = $cartItem->quantity;

                $products->push($product);
                $cartTotal += $product->calculated_price * $product->quantity;
            }
        }

        // Discount Logic (Same as Cart)
        $discountAmount = 0;
        // if ($cartTotal > 150000) {
        //     $discountAmount = $cartTotal * 0.10;
        // }
        $finalTotal = $cartTotal - $discountAmount;

        return view('user.checkout', compact('user', 'products', 'cartTotal', 'discountAmount', 'finalTotal'));
    }
}
