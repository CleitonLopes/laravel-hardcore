<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 12:12
 */

namespace Confee\Domains\Applications\Database\Migrations;


use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableApplication extends Migration
{

    function up()
    {

       $this->schema->create('applications', function(Blueprint $table) {

           $table->increments('id');
           $table->string('descricao');
           $table->timestamps();

       });
    }

    function down()
    {
        $this->schema->dropIfExists('applications');
    }
}