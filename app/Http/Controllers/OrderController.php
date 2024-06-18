<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function __construct()
    {
        // Ensure that only authenticated users can access the controller's methods
        $this->middleware('auth');
    }

    public function getOrdersByUserId()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the authenticated user has the 'user' role
        if ($user->role === 'user') {
            // Fetch orders for the authenticated user
            $orders = Order::where('customer_id', $user->id)->get();

            // Fetch products for the orders
            $products = [];
            foreach ($orders as $order) {
                $products[] = Product::find($order->product_id);
            }

            // Pass orders data to the Blade view
            return view('orders', compact('orders', 'products'));

            // $orders = Order::where('customer_id', $user->id)->get();

            // $data = [
            //     'orders' => $orders,
            //     'products' => [],
            // ];

            // foreach ($orders as $order) {
            //     $data['products'][] = Product::find($order->product_id);
            // }

            // return view('orders', $data);
        } else {
            // If the user does not have the 'user' role, return an unauthorized response
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 403);
        }
    }
}
