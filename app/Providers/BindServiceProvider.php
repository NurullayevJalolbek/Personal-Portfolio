<?php

namespace App\Providers;


use App\Services\Developer\Contracts\iDeveloperService;
use App\Services\Developer\DeveloperService;

use App\Services\Statistic\Contracts\iStatisticService;
use App\Services\Statistic\StatisticService;

use App\Services\Student\Contracts\iStudentService;
use App\Services\Student\StudentService;

use App\Services\Post\Contracts\iPostService;
use App\Services\Post\PostService;

use App\Services\User\Contracts\iUserService;
use App\Services\User\UserService;

use Illuminate\Support\ServiceProvider;

class BindServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(iStatisticService::class, StatisticService::class);
        $this->app->bind(iDeveloperService::class, DeveloperService::class);
        $this->app->bind(iStudentService::class, StudentService::class);
        $this->app->bind(iUserService::class, UserService::class);
        $this->app->bind(iPostService::class, PostService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
