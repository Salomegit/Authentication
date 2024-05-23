<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\WelcomeController;


Route::get('/', [LandingController::class,"landing"] ) -> name("landing");
Route::get('/welcome', [WelcomeController::class,"welcome"] ) -> name("welcome");
