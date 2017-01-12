<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 21/12/2016
 * Time: 17:37
 */

namespace Confee\Support\Database;

use Illuminate\Database\Migrations\Migration as LaravelMigration;


abstract class Migration extends LaravelMigration
{

    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    abstract function up();

    abstract function down();
}