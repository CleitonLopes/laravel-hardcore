<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 22/12/2016
 * Time: 09:11
 */

namespace Confee\Domains\Users\Providers;

use Confee\Domains\Users\Database\Migrations\CreatePasswordResetTable;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

// Factories
use Confee\Domains\Users\Database\Factories\UserFactory;


// Seeders
use Confee\Domains\Users\Database\Seeders\UserSeeders;


class DomainServiceProvider extends ServiceProvider
{
    // Diz que tem migrações a serem registradas
    use HasMigrations;

    public function register()
    {

        $this->registerMigrations();
        $this->registerFactories();
        $this->registerSeeders();
    }

    protected function registerMigrations()
    {
        $this->migrations([

            CreateUsersTable::class,
            CreatePasswordResetTable::class
        ]);
    }

    protected function registerFactories()
    {
        (new UserFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            UserSeeders::class
        ]);
    }
}