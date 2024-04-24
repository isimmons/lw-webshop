<?php

use App\Mail\OrderConfirmation;
use App\Models\Order;
use App\Livewire\{CheckoutStatus, StoreFront, ShowProduct, ShowCart};
use Illuminate\Support\Facades\Route;

Route::get('/', StoreFront::class)->name('home');

Route::get('/products/{product}', ShowProduct::class)->name('product.show');
Route::get('/cart', ShowCart::class)->name('cart.show');

Route::get('/checkout-status', CheckoutStatus::class)->name('checkout.status');


Route::get('/preview-email', function(){
    $order = Order::first();

    return new OrderConfirmation($order);
});

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
