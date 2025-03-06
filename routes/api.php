<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('signup',[AuthController::class, 'signup']);
Route::post('login',[AuthController::class, 'login']);
// simple
// Route::post('logout',[AuthController::class, 'logout']);

// check login or not
// with out group
// Route::post('logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');

// api resource
// with out group
// Route::apiResource('posts',PostController::class)->middleware('auth:sanctum');


// group api Middleware route
Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout',[AuthController::class, 'logout']);
    Route::apiResource('posts',PostController::class);

});
