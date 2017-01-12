<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 15:16
 */

namespace Confee\Domains\TypeFiles\Database\Migrations;


use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableTypeFiles extends Migration
{

    function up()
    {
        $this->schema->create('type_files', function(Blueprint $table) {

            $table->increments('id');
            $table->string('arquivo');
            $table->string('nomeOriginal');
            $table->string('extensao');
            $table->string('mime');
            $table->string('pasta');
            $table->string('tamanho');

            $table->integer('iduser');
            $table->foreign('iduser')->references('id')->on('users');

            $table->timestamps();


        });
    }

    function down()
    {
       $this->schema->dropIfExists('type_files');
    }
}