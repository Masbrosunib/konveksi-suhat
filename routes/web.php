<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/', function() {
    return view('home');
});

Route::get('/dashboard', function() {
    return redirect('/admin');
});

Route::get('/customer', [CustomerController::class, 'index']);



// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/orders', function () {
//     return view('orders');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });