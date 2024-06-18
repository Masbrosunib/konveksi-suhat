<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    function getProduct() {

        $products = product::all();

        return view('product', compact('products'));
    }
}
