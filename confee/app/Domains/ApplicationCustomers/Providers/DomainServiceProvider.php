<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 09:23
 */

namespace Confee\Domains\ApplicationCustomers\Providers;

use Confee\Domains\ApplicationCustomers\Database\Migrations\CreateTableApplicationCustomers;
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

          CreateTableApplicationCustomers::class

      ]);
    }

    protected function registerFactories()
    {

    }

    protected function registerSeeders()
    {

    }

}