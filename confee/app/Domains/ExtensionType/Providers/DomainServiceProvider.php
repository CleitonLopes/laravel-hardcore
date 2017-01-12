<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 15:44
 */

namespace Confee\Domains\ExtensionType\Providers;


use Confee\Domains\ExtensionType\Database\Migrations\CreateTableExtensionType;
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

            CreateTableExtensionType::class

        ]);
    }

    protected function registerFactories()
    {

    }

    protected function registerSeeders()
    {

    }

}