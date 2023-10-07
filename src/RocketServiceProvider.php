<?php

namespace Savalan\Rocket;

use Illuminate\Support\ServiceProvider;
use Savalan\Rocket\Repository\RocketRepository;
use Savalan\Rocket\Repository\RocketRepositoryInterface;

class RocketServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RocketRepositoryInterface::class, RocketRepository::class);
            
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/rocket.php' => config_path('rocket.php'),
        ], 'config');
    
    }
}
