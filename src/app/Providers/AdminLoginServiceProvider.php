<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use App\Actions\Admin\ResetUserPassword;
use App\Actions\Admin\UpdateUserPassword;
use App\Actions\Admin\UpdateUserProfileInformation;
use App\Actions\Admin\AttemptToAuthenticate;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;

class AdminLoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->when([AttemptToAuthenticate::class, AuthenticatedSessionController::class])
            ->needs(StatefulGuard::class)
            ->give(function () {
                return Auth::guard('admins');
            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}