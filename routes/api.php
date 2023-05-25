<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TemperatureController;
use App\Http\Controllers\API\WaterController;
use App\Http\Controllers\API\AudioController;
use App\Http\Controllers\API\FeedController;
use App\Http\Controllers\API\CurrentTemperatureController;
use App\Http\Controllers\API\CurrentFeedController;
use App\Http\Controllers\API\CurrentWaterController;
use App\Http\Controllers\API\TemperatureSwitchController;
use App\Http\Controllers\API\FeedSwitchController;
use App\Http\Controllers\API\WaterSwitchController;
use App\Http\Controllers\API\SecurityController;

Route::resource('temperature/current', CurrentTemperatureController::class);
Route::resource('temperature', TemperatureController::class);
Route::resource('feed/current', CurrentFeedController::class);
Route::resource('feed', FeedController::class);
Route::resource('water/current', CurrentWaterController::class);
Route::resource('water', WaterController::class);
Route::resource('audio', AudioController::class);
Route::resource('security', SecurityController::class);

//Switch on/off
Route::resource('switch-temperature', TemperatureSwitchController::class);
Route::resource('switch-feed', FeedSwitchController::class);
Route::resource('switch-water', WaterSwitchController::class);

//security
