<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\ConfirmablePasswordController;
use App\Http\Controllers\User\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\User\Auth\EmailVerificationPromptController;
use App\Http\Controllers\User\Auth\NewPasswordController;
use App\Http\Controllers\User\Auth\PasswordResetLinkController;
use App\Http\Controllers\User\Auth\RegisteredUserController;
use App\Http\Controllers\User\Auth\VerifyEmailController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:user','verified'])->name('dashboard');

//ショップページ
Route::get('/', [ShopController::class, 'index'])->name('shops.index');
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shops.detail');
Route::get('done', [ShopController::class, 'done'])->name('shops.done');

//お気に入り機能
Route::post('/like/{shops}', [LikeController::class, 'like'])->middleware(['auth'])->name('like');
Route::post('/unlike/{shops}', [LikeController::class, 'unlike'])->middleware(['auth'])->name('unlike');

//評価機能
Route::get('review', [ReviewController::class, 'index'])->name('review');
Route::post('review', [ReviewController::class, 'review'])->name('review.shop');


//メール送信機能
Route::get('/mail/send', [MailController::class, 'send']);
Route::get('/mail/sendMail', [MailController::class, 'sendmail']);

Route::get('/thanks', [RegisteredUserController::class, 'thanks'])->name('thanks');


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

Route::middleware('auth:users')->group(function () {
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


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/reserve/store/{shop_id}', [ShopController::class, 'reserve'])->name('reserve.store');

    //マイページ
    Route::get('/mypage', [UserController::class, 'mypage'])->middleware(['auth'])->name('user.mypage');
    Route::put('/update{id}', [UserController::class, 'update'])->name('update');
    Route::post('destroy{id}', [UserController::class, 'destroy'])->name('reserve.destroy');

    //評価機能
    Route::get('review', [ReviewController::class, 'index'])->name('review');
    Route::post('review', [ReviewController::class, 'review'])->name('review.shop');

    //決済機能
    Route::post('/pay', [PaymentController::class, 'pay']);
});

