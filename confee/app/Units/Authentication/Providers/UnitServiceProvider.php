<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 22/12/2016
 * Time: 15:37
 */

namespace Confee\Units\Authentication\Providers;

use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    // registro dos providers
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
    }
}