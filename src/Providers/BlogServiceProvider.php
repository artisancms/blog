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

        require __DIR__ . '/../menu.php';

        $this->publishes([
            __DIR__.'/../config/artisancms-blog.php' => config_path('artisancms-blog.php'),
        ]);

        $this->publishes([
            __DIR__.'/../resources/views/widgets' => resources_path('views/widgets'),
        ]);

        $this->publishes([
            __DIR__.'/../Widgets' => app_path('Widgets'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views/admin', 'admin');

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
