<?php

namespace App\Providers;

use DDD\Application\Bus\Contracts\Container;
use DDD\Domain\Article\ArticleRepository;
use DDD\Infrastructure\Bus\Contracts\CommandBus;
use DDD\Infrastructure\Bus\LaravelContainer;
use DDD\Infrastructure\Bus\SimpleCommandBus;
use DDD\Infrastructure\Persistence\Eloquent\ArticleEloquentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CommandBus::class,
            SimpleCommandBus::class
        );

        $this->app->bind(
            Container::class,
            LaravelContainer::class
        );

        $this->app->bind(
            ArticleRepository::class,
            ArticleEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
