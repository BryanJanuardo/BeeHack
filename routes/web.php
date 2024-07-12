<?php

use App\Http\Controllers\TukangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formregistertukang', function() {
    return view('registerWorker');
})->name('formregistertukang');

Route::post('/registertukang', [TukangController::class, 'store'])->name('registertukang');