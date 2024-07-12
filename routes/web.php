<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TukangController;
use App\Http\Controllers\DashboardController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('dashboardCust');
});

Route::get('/test', function() {
    return view('registerWorker');
});

Route::prefix('/customer')->group(function (){
    Route::prefix('/register')->group(function (){
        Route::get('/index', [CustomerController::class, 'indexRegister'])->name('customer.register.index');
        Route::post('/post', [CustomerController::class, 'register'])->name('customer.register.post');
    });

    Route::prefix('/login')->group(function (){
        Route::get('/index', [CustomerController::class, 'indexLogin'])->name('customer.login.index');
        Route::post('/post', [CustomerController::class, 'login'])->name('customer.login.post');
    });

    Route::prefix('/dashboard')->group(function (){
        Route::get('/index', [DashboardController::class, 'indexCustomer'])->name('customer.dashboard.index');
        Route::post('/index/filter', [DashboardController::class, 'filterIndexCustomer'])->name('Customer.dashboard.index.filter');
    });
});

Route::prefix('/tukang')->group(function (){
    Route::prefix('/register')->group(function (){
        Route::get('/index', [TukangController::class, 'indexRegister'])->name('tukang.register.index');
        Route::post('/post', [TukangController::class, 'register'])->name('tukang.register.post');
    });

    Route::prefix('/login')->group(function (){
        Route::get('/index', [TukangController::class, 'indexLogin'])->name('tukang.login.index');
        Route::post('/post', [TukangController::class, 'login'])->name('tukang.login.post');
    });
});

