<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register/success', [AuthController::class, 'success'])->name('success');
//ページ確認用
//Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

//Route::get('/', [ItemController::class, 'search'])->name('items.search');

// GETリクエストでアクセスするだけでメールを送信するルート（テスト用）
//Route::get('/test-send-email', [AuthController::class, 'sendTestEmail']);

// フォーム送信（POST）でメールを送信するルートの例
//Route::post('/send-email', [AuthController::class, 'sendTestEmail']);

Route::middleware('verified')->group(function () {

    // ★ Fortify認証成功後の遷移先 (config/fortify.phpで'/profile'に設定済み)
    // ユーザーはメール認証完了後、このルートにリダイレクトされます。
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // その他の認証済みユーザー専用ルート（例: ダッシュボード、設定画面など）
});

