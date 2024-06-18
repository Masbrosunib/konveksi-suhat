<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class HomeController extends Controller
{
    function getProduct() {

        // Check if the 'product' table exists before querying it to avoid potential exceptions.
        if (!\Schema::hasTable('products')) {
            return view('home');
        }
        
        $data = Product::query()->get();
        
        // Check if the query returned any results to avoid potential null pointer references.
        if ($data === null) {
            return view('home');
        }

        return view('home', compact('data'));
    }
}
