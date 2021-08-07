<?php

namespace App\Providers;

use App\Repository\RoleRepository;
use App\Repository\PlayerRepository;
use App\Repository\ResultRepository;
use App\Repository\FormulaRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\PlayerRepositoryInterface;
use App\Interfaces\ResultRepositoryInterface;
use App\Interfaces\FormulaRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PlayerRepositoryInterface::class, PlayerRepository::class);
        $this->app->bind(ResultRepositoryInterface::class, ResultRepository::class);
        $this->app->bind(FormulaRepositoryInterface::class, FormulaRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
