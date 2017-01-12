<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 12:19
 */

namespace Confee\Domains\Applications\Providers;

use Confee\Domains\Applications\Database\Migrations\CreateTableApplication;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

class DomainServiceProvider extends ServiceProvider
{

    use HasMigrations;

    public function register()
    {
        $this->registerMigrations();
    }

    protected function registerMigrations()
    {
        $this->migrations([

            CreateTableApplication::class

        ]);
    }

    protected function registerFactories()
    {

    }

    protected function registerSeeders()
    {

    }
}