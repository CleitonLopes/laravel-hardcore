<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 09:03
 */

namespace Confee\Domains\ApplicationExtensionType\Providers;


use Confee\Domains\ApplicationExtensionType\Database\Migrations\CreateTableApplicationExtensionType;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

class DomanServiceProvider extends ServiceProvider
{

    use HasMigrations;

    public function register()
    {
        $this->registerMigrations();
    }

    protected function registerMigrations()
    {
        $this->migrations([

            CreateTableApplicationExtensionType::class

        ]);
    }

    protected function registerFactories()
    {

    }

    protected function registerSeeders()
    {

    }

}