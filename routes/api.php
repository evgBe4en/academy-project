<?php

use App\Http\Controllers\Level1Controllers\ApplesController;
use App\Http\Controllers\Level1Controllers\FibonacciController;
use App\Http\Controllers\Level1Controllers\NestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nesting/{i}', [NestingController::class, 'getNestedData']);
Route::get('/fibonacci/{index}', [FibonacciController::class, 'getFibonacciNumber']);
Route::get('/apples/{pattern}/{index}', [ApplesController::class, 'getAppleColor']);

