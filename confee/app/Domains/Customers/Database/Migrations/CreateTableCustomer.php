<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 11:14
 */

namespace Confee\Domains\Customers\Database\Migrations;

use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableCustomer extends Migration
{

    function up()
    {
       $this->schema->create('customers', function(Blueprint $table) {
           $table->increments('id');
           $table->string('nome');
           $table->string('razaosocial');
           $table->string('fantasia');
           $table->string('cpfcnpj', 14);
           $table->string('ie', 14)->nullable();
           $table->char('fisicajuridica', 1);
           $table->timestamps();
       });
    }

    function down()
    {
        $this->schema->dropIfExists('customers');
    }
}