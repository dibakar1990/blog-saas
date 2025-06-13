<?php

namespace App\Providers;

use App\Helpers\CommonHelper;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Inertia::share([
            'menuCategories' => fn () => CommonHelper::getMenuCategories(),
            'socialLinks' => fn () => CommonHelper::getSocialLink(),
            'setting' => fn () => CommonHelper::getSetting(),
            'categories' => fn () => CommonHelper::getCategories(),
            'tags' => fn () => CommonHelper::getTags(),
        ]);
    }
}
