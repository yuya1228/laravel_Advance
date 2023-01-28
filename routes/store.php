<?php

use App\Http\Controllers\Store\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Store\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Store\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Store\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Store\Auth\NewPasswordController;
use App\Http\Controllers\Store\Auth\PasswordResetLinkController;
use App\Http\Controllers\Store\Auth\RegisteredUserController;
use App\Http\Controllers\Store\Auth\VerifyEmailController;
use App\Http\Controllers\Store\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('store.welcome');
})->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});


Route::middleware('auth:stores')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])
        ->name('dashboard');

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    //店舗情報
    Route::get('/shop_store', [ShopController::class, 'shop_store'])->name('shop_store');
    Route::post('/store/{id}', [ShopController::class, 'store'])->name('store');
    Route::post('/shop_store/create', [ShopController::class, 'store_create'])->name('store_create');
});
