<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\AdminRepository;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\AdminRepositoryInterface;
use App\Repositories\Contracts\ApplicationSettingsIntarface;
use App\Repositories\Contracts\FaqRepositoryInterface;
use App\Repositories\Eloquent\ApplicationSettingsRepository;
use App\Repositories\Eloquent\FaqRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminRepository::class,
        );
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            FaqRepositoryInterface::class,
            FaqRepository::class
        );
        $this->app->bind(
            ApplicationSettingsIntarface::class,
            ApplicationSettingsRepository::class
        );
       
    }

    public function boot(): void
    {
        //
    }
}
