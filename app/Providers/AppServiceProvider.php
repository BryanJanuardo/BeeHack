<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Tukang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('customer', function(Customer $customer) {
            return Auth::guard('customer')->check();
        });

        Gate::define('tukang', function(Tukang $tukang){
            return Auth::guard('tukang')->check();
        });

        Gate::define('admin', function(Tukang $tukang){
            return Auth::guard('admin')->check();
        });
    }
}
