<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//wallet
Route::get('/wallet', [WalletController::class, 'index'])->name('wallet.index');
Route::post('/wallet/topup', [WalletController::class, 'topUp'])->name('wallet.topup');
Route::get('/wallet/history', [WalletController::class, 'history'])->name('wallet.history');

//payment (virtual account)
Route::get('/payment/{transaction}', [PaymentController::class, 'showPaymentPage'])
    ->name('payment.show');

Route::post('/payment/create-va', [PaymentController::class, 'createVA'])
    ->name('payment.createVA');

Route::post('/payment/check-status', [PaymentController::class, 'checkStatus'])
    ->name('payment.checkStatus');

//checkout
Route::get('/checkout/{product}', [CheckoutController::class, 'checkout'])
    ->name('checkout.page');

Route::post('/checkout/process', [CheckoutController::class, 'process'])
    ->name('checkout.process');

Route::get('/checkout/success/{transaction}', [CheckoutController::class, 'success'])
    ->name('checkout.success');

// products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
