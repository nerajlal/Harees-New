<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOrder;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $orders = CustomerOrder::where('user_id', $user->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        // Enrich items with product details (image, name, etc.)
        // Since we don't have a direct relationship to a single product table, we manually fetch.
        // Actually, CustomerOrder has many Items.
        // We need to fetch items.
        // Let's lazy load items: $orders->load('items'); -> Assuming relationship exists.
        // Wait, I haven't defined relationship in CustomerOrder model yet.
        // I should probably define it or just use manual query for now to be safe and fast.
        
        // Let's fetch items manually for each order to be safe or define relationship.
        // Defining relationship is better.
        
        foreach ($orders as $order) {
            $items = \App\Models\CustomerOrderItem::where('order_id', $order->id)->get();
            $order->items = $items;

            foreach ($items as $item) {
                if (\Illuminate\Support\Facades\Schema::hasTable($item->table_name)) {
                    $product = DB::table($item->table_name)->where('product_code', $item->product_code)->first();
                    $item->product_name = $product->name ?? 'Product';
                    $item->product_image = $product->img1_webp ?? $product->img2 ?? 'placeholder.jpg';
                    $item->color = $product->color ?? '';
                    $item->size = $product->size ?? '';
                } else {
                    $item->product_name = 'Unknown Product';
                    $item->product_image = 'placeholder.jpg';
                }
            }
        }

        return view('user.orders', compact('orders'));
    }
}
