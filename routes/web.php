<?php

use App\Http\Controllers\TrCustomerServiceController;
use App\Http\Controllers\TukangController;
use App\Models\TrCustomerService;
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
    return view('preDashboardCust');
});

Route::get('/formregistertukang', function() {
    return view('registerWorker');
})->name('formregistertukang');

Route::post('/registertukang', [TukangController::class, 'store'])->name('registertukang');
Route::get('/tukang', [TukangController::class, 'show']);
Route::get('/tukang/service', [TrCustomerServiceController::class, 'show']);
// Route:get('/servicedetails',  [])

