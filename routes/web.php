<?php

use Illuminate\Support\Facades\Route;
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

Route::get('register', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('password/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('password/reset', [AuthController::class, 'passwordReset']);
Route::middleware('preventBackHistory','auth:web')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('admin/dashboard', 'App\Http\Controllers\DashboardController');
    Route::resource('admin/temperature', 'App\Http\Controllers\TemperatureController');
    Route::resource('admin/audio', 'App\Http\Controllers\AudioController');
    Route::resource('admin/feed', 'App\Http\Controllers\FeedController');
    Route::resource('admin/system', 'App\Http\Controllers\SystemController');
    Route::resource('admin/water', 'App\Http\Controllers\WaterController');
    Route::resource('admin/user', 'App\Http\Controllers\UserController');
    Route::resource('admin/security', 'App\Http\Controllers\SecurityController');
    Route::resource('admin/sensor', 'App\Http\Controllers\SensorController');
});
