<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminVerificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerCategoryController;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');      // halaman profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // form edit profil
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // update data
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // hapus akun
});


require __DIR__.'/auth.php';

// customer
use App\Http\Controllers\Customer\{
    CustomerHomeController,
    CustomerProductController,
    CustomerCheckoutController,
    CustomerHistoryController,
    CustomerWalletController
};

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::middleware(['auth', 'member'])->group(function () {

    Route::get('/home', [CustomerHomeController::class, 'index'])->name('customer.home');

    Route::get('/product/{slug}', [CustomerProductController::class, 'show'])->name('customer.product');

    Route::get('/checkout', [CustomerCheckoutController::class, 'index'])->name('customer.checkout');
    Route::post('/checkout', [CustomerCheckoutController::class, 'process'])->name('customer.checkout.process');

    Route::get('/history', [CustomerHistoryController::class, 'index'])->name('customer.history');

    Route::get('/wallet/topup', [CustomerWalletController::class, 'topup'])->name('customer.wallet.topup');
    Route::post('/wallet/topup', [CustomerWalletController::class, 'submitTopup'])->name('customer.wallet.submit');
    Route::get('/wallet/success/{id}', [CustomerWalletController::class, 'success'])->name('customer.wallet.success');

});


// admin
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/users', [AdminUserController::class, 'index'])
        ->name('users.index');

    Route::get('/users/{id}', [AdminUserController::class, 'detail'])
        ->name('users.detail');

    Route::get('/verification', [AdminVerificationController::class, 'index'])
        ->name('verification.index');

    Route::post('/verification/{id}/approve', [AdminVerificationController::class, 'approve'])
        ->name('verification.approve');

    Route::post('/verification/{id}/reject', [AdminVerificationController::class, 'reject'])
        ->name('verification.reject');
});



//payment
Route::get('/payment', fn()=>view('payment.index'));
Route::get('/payment/confirm', fn()=>view('payment.confirm'));
Route::get('/payment/result', fn()=>view('payment.result'));

