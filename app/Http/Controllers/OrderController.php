<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function getOrders($customerId)
    {
        $data = Order::table('orders')
            ->join('customers', 'orders.CustomerID', '=', 'customers.CustomerID')
            ->select('orders.*', 'customers.CustomerID', 'customers.name', 'customers.email', 'customers.phone', 'customers.address')
            ->where('orders.CustomerID', $customerId)
            ->get();
        return view('order', compact('data'));
    }
}