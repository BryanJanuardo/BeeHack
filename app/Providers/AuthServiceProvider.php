<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Tukang;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('customer', function($user) {
            return Auth::guard('customer')->check();
        });

        Gate::define('tukang', function($user){
            return Auth::guard('tukang')->check();
        });

        Gate::define('admin', function($user){
            return Auth::guard('admin')->check();
        });
    }
}
