<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 21/12/2016
 * Time: 17:46
 */

namespace Confee\Domains\Users\Database\Migrations;


use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

    function up()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();

            $table->integer('idcustomer')->nullable();
            $table->foreign('idcustomer')->references('id')->on('customers');

            $table->timestamps();
        });
    }

    function down()
    {
        $this->schema->dropIfExists('users');
    }
}