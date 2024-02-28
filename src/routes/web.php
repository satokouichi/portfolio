<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\TopController;
use App\Http\Controllers\Web\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Web\Auth\NewPasswordController;
use App\Http\Controllers\Web\Auth\PasswordResetLinkController;

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

// 認証
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});
Route::middleware('auth:users')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// ログイン済み
Route::middleware(['auth:users'])->group(function () {

    // トップページ
    Route::get('/', [TopController::class, 'index'])->name('index');

});
