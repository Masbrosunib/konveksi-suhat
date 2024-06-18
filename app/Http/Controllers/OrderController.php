<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function getOrders($customerId, $customerName)
    {
        $data = Order::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.customer_id')
            ->select('orders.*', 'customers.customer_id', 'customers.name', 'customers.email', 'customers.phone', 'customers.address')
            ->where('orders.customer_id', $customerId)
            ->get();
        return view('order', compact('data'));
    }
}