<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TemperatureController;


Route::resource('temperature', TemperatureController::class);
