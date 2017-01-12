<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 11:10
 */

namespace Confee\Domains\Customers\Providers;

use Confee\Domains\Customers\Database\Migrations\CreateTableCustomer;

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

            CreateTableCustomer::class

        ]);
    }

    protected function registerFactories()
    {

    }

    protected function registerSeeders()
    {

    }

}