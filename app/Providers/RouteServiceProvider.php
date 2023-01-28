<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';
    public const ADMIN_HOME = '/admin/dashboard';
    public const STORE_HOME = '/store/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            //Route::middleware('web')->group(base_path('routes/web.php'));

            Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));

            Route::prefix('admin')
            ->as('admin.')
            ->middleware('web')
            ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));

            Route::prefix('/')
                ->as('user.')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/user.php'));

            Route::prefix('store')
            ->as('store.')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/store.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
