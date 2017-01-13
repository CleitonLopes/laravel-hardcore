<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 16:52
 */

namespace Confee\Units\Authentication\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Confee\Units\Authentication\Contracts\Repositories\TypeFileRepository::class, \Confee\Units\Authentication\Repositories\TypeFileRepositoryEloquent::class);
    }

}