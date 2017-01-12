<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 15:39
 */


namespace Confee\Domains\ExtensionType\Database\Migrations;

use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableExtensionType extends Migration
{

    function up()
    {
       $this->schema->create('extension_type', function(Blueprint $table) {

           $table->increments('id');
           $table->string('descricao');
           $table->timestamps();

       });
    }

    function down()
    {
        $this->schema->dropIfExists('extension_type');
    }
}
