<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Retrieves all products from the database and returns a view with the products.
     *
     * @return \Illuminate\Contracts\View\View The view with the products.
     */
    function getProduct() {

        $products = Product::all();
        

        return view('home', compact('products'));
    }

    function show(){
        $products = Product::all();
        $this->debug($products);
    }

    private function debug($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
