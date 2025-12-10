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

// customer
Route::get('/', fn()=>view('customer.home'));
Route::get('/product/{slug}', fn()=>view('customer.product'));

Route::middleware('auth')->group(function () {
    Route::get('/checkout', fn()=>view('customer.checkout'));
    Route::get('/history', fn()=>view('customer.history'));

    Route::get('/wallet/topup', fn()=>view('customer.wallet.topup'));
    Route::get('/wallet/success', fn()=>view('customer.wallet.success'));
});

//seller
Route::middleware(['auth', 'seller'])->group(function () {

    Route::get('/seller/dashboard', fn()=>view('seller.dashboard'));

    Route::get('/store/register', fn()=>view('seller.store.register'));
    Route::get('/seller/profile', fn()=>view('seller.store.profile'));

    Route::resource('/seller/categories', SellerCategoryController::class)->only(['index','create','edit']);

    Route::resource('/seller/products', SellerProductController::class)->only(['index','create','edit']);
    Route::get('/seller/products/images/{id}', fn()=>view('seller.products.images'));

    Route::get('/seller/orders', fn()=>view('seller.orders.index'));
    Route::get('/seller/orders/{id}', fn()=>view('seller.orders.detail'));

    Route::get('/seller/balance', fn()=>view('seller.balance.index'));
    Route::get('/seller/balance/history', fn()=>view('seller.balance.history'));

    Route::get('/seller/withdrawals', fn()=>view('seller.withdrawals.index'));
    Route::get('/seller/withdrawals/create', fn()=>view('seller.withdrawals.create'));
});


// admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', fn()=>view('admin.dashboard'));
    Route::get('/admin/verification', fn()=>view('admin.verification.index'));
    Route::get('/admin/users', fn()=>view('admin.users.index'));
    Route::get('/admin/users/{id}', fn()=>view('admin.users.detail'));
});

//payment
Route::get('/payment', fn()=>view('payment.index'));
Route::get('/payment/confirm', fn()=>view('payment.confirm'));
Route::get('/payment/result', fn()=>view('payment.result'));


