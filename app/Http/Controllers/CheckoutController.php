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
    public function process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mobile' => 'required',
            'delivery' => 'required|in:home,pickup',
            'fullname' => 'required',
            'pincode' => 'required', // Should be conditionally required in JS, but good to have
            // 'address' => 'required_if:delivery,home', // Conditional validation
        ]);

        $user = Auth::user();
        $cartItems = DB::table('cart')->where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Cart is empty');
        }

        // 1. Calculate Totals
        $cartTotal = 0;
        $orderItemsData = [];

        foreach ($cartItems as $item) {
             if (!Schema::hasTable($item->table_name)) continue;
             
             $product = DB::table($item->table_name)->where('product_code', $item->product_code)->first();
             if ($product) {
                 $priceData = $this->priceCalculator->calculatePrice($product->product_code, $item->table_name);
                 $price = ceil($priceData['total_price']);
                 
                 $itemTotal = $price * $item->quantity;
                 $cartTotal += $itemTotal;
                 
                 $orderItemsData[] = [
                     'product_id' => $product->id,
                     'product_code' => $product->product_code,
                     'table_name' => $item->table_name,
                     'quantity' => $item->quantity,
                     'price' => $price,
                     'metal_cost' => $priceData['metal_cost'] ?? 0,
                     'making_charges' => $priceData['making_charges'] ?? 0,
                     'gst' => $priceData['gst'] ?? 0,
                     'metal_type' => $priceData['metal_type'] ?? '',
                 ];
             }
        }

        $discountAmount = 0; // Disabled
        $finalTotal = $cartTotal - $discountAmount;

        // 2. Create Order
        $order = new \App\Models\CustomerOrder();
        $order->user_id = $user->id;
        $order->fullname = $request->fullname;
        $order->email = $request->email;
        $order->phone = $request->mobile;
        $order->pincode = $request->pincode;
        $order->address = $request->address ?? ''; // Default empty if pickup?
        $order->city = $request->city;
        $order->state = $request->state;
        $order->delivery_type = $request->delivery;
        $order->total_amount = $cartTotal;
        $order->discount_amount = $discountAmount;
        $order->final_amount = $finalTotal;
        $order->payment_method = 'COD'; // Placeholder or from request
        $order->status = 'pending';
        $order->save();

        // 3. Save Items
        foreach ($orderItemsData as $itemData) {
            $orderItem = new \App\Models\CustomerOrderItem($itemData);
            $orderItem->order_id = $order->id;
            $orderItem->save();
        }

        // 4. Clear Cart
        DB::table('cart')->where('user_id', $user->id)->delete();

        // 5. Redirect (to validation/success page, or just back with success for now)
        // Ideally: return redirect()->route('order.success', $order->id);
        // For now:
        return redirect()->route('home')->with('success', 'Order placed successfully! Order #' . $order->id);
    }
}
