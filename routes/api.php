<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

// Public Routes
Route::get('/homee', [HomeController::class, 'homee'])->name('homee');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Authentication Routes
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, '  ']);

// Cart Routes
Route::post('/cart/add/{product}', [ShoppingCartController::class, 'addProduct'])->name('cart.add');
Route::post('/cart/remove/{product}', [ShoppingCartController::class, 'removeProduct'])->name('cart.remove');
Route::get('/cart', [ShoppingCartController::class, 'index'])->name('cart.index');

// Checkout Route
// Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

// Authenticated User Routes (Requires Bearer Token or Authentication)
Route::middleware('auth:api')->group(function () {
    // Route::get('/account', [AccountController::class, 'edit'])->name('account.edit');
    // Route::post('/account', [AccountController::class, 'update'])->name('account.update');
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product.show');
});
