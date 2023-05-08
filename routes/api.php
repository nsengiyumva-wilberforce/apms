<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TemperatureController;
use App\Http\Controllers\API\WaterController;
use App\Http\Controllers\API\AudioController;
use App\Http\Controllers\API\FeedController;


Route::resource('temperature', TemperatureController::class);
Route::resource('feed', FeedController::class);
Route::resource('water', WaterController::class);
Route::resource('audio', AudioController::class);
