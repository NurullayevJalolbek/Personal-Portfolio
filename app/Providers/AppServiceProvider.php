<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Models\About;

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
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // $about = About::first();
        // View::share('about', $about);

        // View::composer(['layouts.sidebar'], function ($view) {
        //     // $view->with('applicationCount', Application::where('status', 'sent')->count());
        // });

        Paginator::defaultView('layouts.pagination');
    }
}
