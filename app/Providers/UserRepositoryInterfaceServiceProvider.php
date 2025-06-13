<?php

namespace App\Providers;

use App\Interfaces\BlogRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\SettingRepositoryInterface;
use App\Interfaces\SocialRepositoryInterface;
use App\Interfaces\TagRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\BlogRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;
use App\Repositories\SocialRepository;
use App\Repositories\TagRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryInterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $repositories = [
           UserRepositoryInterface::class => UserRepository::class,
           CategoryRepositoryInterface::class => CategoryRepository::class,
           TagRepositoryInterface::class => TagRepository::class,
           BlogRepositoryInterface::class => BlogRepository::class,
           SettingRepositoryInterface::class => SettingRepository::class,
           SocialRepositoryInterface::class => SocialRepository::class
        ];
    
        foreach ($repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
