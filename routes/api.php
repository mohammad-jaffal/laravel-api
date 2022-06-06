<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/api1', [TestController::class, 'pal']);
Route::get('/api2', [TestController::class, 'secs']);
Route::get('/api3', [TestController::class, 'texts']);
Route::get('/api4', [TestController::class, 'beers']);
Route::get('/api5', [TestController::class, 'teams']);
Route::get('/api6', [TestController::class, 'pablo']);