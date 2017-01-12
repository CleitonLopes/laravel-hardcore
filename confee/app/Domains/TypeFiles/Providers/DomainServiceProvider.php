<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 15:28
 */

namespace Confee\Domains\TypeFiles\Providers;

use Confee\Domains\TypeFiles\Database\Migrations\CreateTableTypeFiles;

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

            CreateTableTypeFiles::class

        ]);
    }

    protected function registerFactories()
    {

    }

    protected function registerSeeders()
    {

    }
}