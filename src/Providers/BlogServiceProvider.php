<?php

namespace ArtisanCMS\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }

        $this->publishes([
            __DIR__.'/../config/artisancms-blog.php' => config_path('artisancms-blog.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
