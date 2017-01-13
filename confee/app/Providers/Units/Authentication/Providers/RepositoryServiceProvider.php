<?php

namespace Confee\Providers\Units\Authentication\Providers;

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
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Confee\Units\Contracts\Repositories\TesteRepository::class, \Confee\Units\Authentication\Repositories\TesteRepositoryEloquent::class);
        $this->app->bind(\Confee\Units\Authentication\Contracts\Repositories\TesteRepository::class, \Confee\Units\Authentication\Repositories\TesteRepositoryEloquent::class);
        $this->app->bind(\Confee\Units\Authentication\Contracts\Repositories\TypeFileRepository::class, \Confee\Units\Authentication\Repositories\TypeFileRepositoryEloquent::class);
        $this->app->bind(\Confee\Units\Authentication\Contracts\Repositories\TypeFileRepository::class, \Confee\Units\Authentication\Repositories\TypeFileRepositoryEloquent::class);
        //:end-bindings:
    }
}
