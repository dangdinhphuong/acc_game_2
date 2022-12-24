<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HandleController;
use App\Http\Controllers\CashHistoryController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\PayMomoController;
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
// Authentication
Route::group([
    'middleware' => ["maintence"],
], function () {
    Route::get('dang-nhap', [AuthController::class, 'login_get'])->name('login');
    Route::get('dang-ky', [AuthController::class, 'register_get'])->name('register_get');
    Route::get('dang-xuat', [AuthController::class, 'logout'])->name('logout');
    Route::get('quen-mat-khau', [AuthController::class, 'resetPass'])->name('forgetPass');
    Route::get('reset/password/info/{token}', [AuthController::class, 'getAccount'])->name('getAccount');
    Route::post('luu-doi-mat-khau', [AuthController::class, 'resetPassPost'])->name("resetPass");
    Route::post('registerpost', [AuthController::class, 'register'])->name('registerpost');
    Route::get('active/account/{token}', [AuthController::class, 'activeAccount'])->name('active_account');
    Route::post('login-post', [AuthController::class, 'store'])->name('loginpost');

    Route::group([
        'middleware' => ["domain", 'auth', 'preventBackHistory'],
    ], function () {
        Route::get('/', [AuthController::class, 'profile'])->name('profile');
        Route::get('/rut-vat-pham', [HandleController::class, 'pageWithdrawal'])->name('pageWithdrawal');
        Route::get('/nap-xu-vao-game', [HandleController::class, 'pageWithdrawal'])->name('pageWithdrawal');
        Route::get('/lich-su-rut-vat-pham', [HandleController::class, 'historyRetract'])->name('historyRetract');
        Route::get('/lich-su-nap-the', [HandleController::class, 'historyRecharge'])->name('historyRecharge');
        Route::post('/luu-rut-vat-pham', [HandleController::class, 'Withdrawal'])->name('withdrawal');
        Route::get('doi-mat-khau', [AuthController::class, 'changePassword'])->name('changePassword');
        Route::post('change-password', [AuthController::class, 'changePasswordPost'])->name('changePasswordPost');
        Route::post('update-email', [AuthController::class, 'updateEmail'])->name('updateEmail');
        Route::get('nap-the', [CashHistoryController::class, 'cardRchargeHistory'])->name('cardRchargeHistory');
        Route::post('recharge', [RechargeController::class, 'recharge'])->name('recharge');
        Route::get('nap-the-momo', [PayMomoController::class, 'index'])->name('momo');
        Route::post('recharge-momo', [PayMomoController::class, 'store'])->name('rechargeMomo');
        // api nhận data từ momo khi thanh toán thành công
        Route::get('api-momo-pay', [PayMomoController::class, 'apiRequestMomo'])->name('apiRequestMomo');
    });
});

