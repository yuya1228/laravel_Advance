<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;

Route::get('/', [ShopController::class, 'index'])->name('shops.index');
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shops.detail');
Route::get('done', [ShopController::class, 'done'])->name('shops.done');
Route::post('/reserve/store/{shop_id}', [ShopController::class, 'reserve'])->middleware(['auth'])->name('reserve.store');

//評価機能
Route::get('review',[ReviewController::class,'index'])->middleware(['auth'])->name('review');
Route::post('review',[ReviewController::class,'review'])->name('review.shop');

//登録完了メッセージ
Route::get('auth/thanks', [RegisteredUserController::class, 'thanks'])->name('thanks');

//マイページ
Route::get('/mypage', [UserController::class, 'mypage'])->middleware(['auth'])->name('user.mypage');
Route::put('/update{id}',[UserController::class,'update'])->name('update');
Route::post('destroy{id}',[UserController::class,'destroy'])->name('reserve.destroy');

//お気に入り機能
Route::post('/like/{shops}', [LikeController::class, 'like'])->middleware(['auth'])->name('like');
Route::post('/unlike/{shops}', [LikeController::class, 'unlike'])->middleware(['auth'])->name('unlike');

//決済機能
Route::post('/pay',[PaymentController::class,'pay']);

//メール送信機能
Route::get('/mail/send',[MailController::class,'send']);
Route::get('/mail/sendMail',[MailController::class,'sendmail']);

//ログイン機能
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
