<?php

use App\Http\Controllers\Service\TukangController;
use App\Http\Controllers\Service\TukangService;
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

Route::get('/tukang', [TukangService::class, 'index']);
Route::post('/tukang/store', [TukangService::class, 'store']);
