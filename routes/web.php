<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TukangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceTypeController;
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
    Route::middleware('auth.customer')->group(function () {
        Route::prefix('/dashboard')->group(function (){
            Route::get('/index', [DashboardController::class, 'indexCustomer'])->name('customer.dashboard.index');
            Route::post('/index/filter', [DashboardController::class, 'filterIndexCustomer'])->name('customer.dashboard.index.filter');
            Route::get('/logout', [DashboardController::class, 'logoutCustomer'])->name('customer.dashboard.logout');
        });
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

    Route::middleware('auth.tukang')->group(function (){
        Route::prefix('/dashboard')->group(function (){
            Route::get('/index', [DashboardController::class, 'indexTukang'])->name('tukang.dashboard.index');
            Route::post('/index/filter', [DashboardController::class, 'filterIndexTukang'])->name('tukang.dashboard.index.filter');
            Route::get('/logout', [DashboardController::class, 'logoutTukang'])->name('tukang.dashboard.logout');
        });
    });
});

Route::prefix('/admin')->group(function (){
    Route::prefix('/login')->group(function (){
        Route::get('/index', [AdminController::class, 'indexLogin'])->name('admin.login.index');
        Route::post('/post', [AdminController::class, 'login'])->name('admin.login.post');
    });

    Route::middleware('auth.admin')->group(function (){
        Route::prefix('/dashboard')->group(function (){
            Route::get('/index', [DashboardController::class, 'indexAdmin'])->name('admin.dashboard.index');
            Route::get('/logout', [DashboardController::class, 'logoutAdmin'])->name('admin.dashboard.logout');
        });
        Route::post('/TukangProposal/{id}/{action}', [TukangController::class, 'store'])->name('admin.approve.proposaltukang');
        Route::post('/ServiceTypeProposal/{id}/{action}', [ServiceTypeController::class, 'store'])->name('admin.approve.proposalservicetype');
    });
});


