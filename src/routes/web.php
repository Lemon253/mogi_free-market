<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;


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
//Route::get('/', [ItemController::class, 'search'])->name('items.search');

// GETリクエストでアクセスするだけでメールを送信するルート（テスト用）
Route::get('/send-email', [AuthController::class, 'sendTestEmail']);
// フォーム送信（POST）でメールを送信するルートの例
// Route::post('/contact', [EmailController::class, 'sendContactEmail']);


//ログイン認証必須ページ
Route::middleware('auth')->group(function () {
    //Route::get('/', [AuthController::class, 'index']);
});