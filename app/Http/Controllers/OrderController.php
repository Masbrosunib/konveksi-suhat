<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function __construct()
    {
        $user = Auth::user();

        // if (!$user || $user->role !== 'user') {
        //     // Redirect to the login page if the user is not logged in or does not have the 'user' role
        //     return redirect('/login');
        // }
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
            $orders = Order::with('product')->where('customer_id', $user->id)->get();

            // Pass orders data to the Blade view
            return view('orders', compact('orders'));

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

    public function showCheckoutForm()
    {
        $products = Product::all();
        $paymentMethods = PaymentMethod::all();
        return view('checkout', compact('products', 'paymentMethods'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,product_id',
            'quantity' => 'required|integer|min:12',
            'design_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'payment_id' => 'required|exists:payment_methods,payment_id',
        ]);

        $product = Product::find($request->product_id);
        $totalPrice = $product->product_price * $request->quantity;

        $designImage = null;
        if ($request->hasFile('design_image')) {
            $designImage = $request->file('design_image')->store('design_images', 'public');
        }

        $order = new Order();
        $order->customer_id = Auth::id();
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->total_price = $totalPrice;
        $order->order_date = now();
        $order->order_estimation_date = now()->addDays(7);
        $order->order_status = 'Pending';
        $order->design_image = $designImage;
        $order->payment_id = $request->payment_id;
        $order->save();

        return redirect()->route('checkout.confirmation')->with('order', $order);
    }

    public function showOrderConfirmation()
    {
        $orders = Order::with(['product', 'paymentMethod'])->where('customer_id', auth()->id())->get();
        return view('order_confirmation', compact('orders'));
    }

    public function getOrderDetails(Order $order)
    {
        return response()->json([
            'product_name' => $order->product->product_name,
            'quantity' => $order->quantity,
            'total_price' => $order->total_price,
            'order_date' => $order->order_date,
            'order_estimation_date' => $order->order_estimation_date,
            'order_status' => $order->order_status,
            'payment_method_name' => $order->paymentMethod->payment_name,
            'design_image' => $order->design_image ? Storage::url($order->design_image) : null,
        ]);
    }
}
