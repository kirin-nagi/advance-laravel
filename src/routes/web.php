<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\SessionController;

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post']);
Route::get('/session', [sessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);
