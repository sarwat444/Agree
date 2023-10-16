<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\{ForgetPasswordController, LoginController, NewPasswordController};
use App\Http\Controllers\Admin\DashboardController ;
use Illuminate\Support\Facades\Route;
CONST ASSET_URL_PUBLIC = '' ;
/** admin auth routes */
Route::controller(LoginController::class)->prefix('admins')->group(function () {
    Route::get('login', 'create')->name('admins.login')->middleware('guest:admin');
    Route::post('login', 'store')->middleware('throttle:5,1');
    Route::post('logout', 'destroy')->name('admins.logout')->middleware('auth:admin');
});

/** admin reset password routes */
Route::controller(ForgetPasswordController::class)->prefix('admins')->middleware('guest:admin')->group(function () {
    Route::get('forget-password', 'create')->name('admins.password.request');
    Route::post('forget-password', 'store')->name('admins.password.email')->middleware('throttle:5,1');;
});

/** admin new password routes */
Route::controller(NewPasswordController::class)->prefix('admins')->middleware('guest:admin')->group(function () {
    Route::get('reset-password/{token}', 'create')->name('admins.password.reset');
    Route::post('reset-password', 'store')->name('admins.password.update');
});

