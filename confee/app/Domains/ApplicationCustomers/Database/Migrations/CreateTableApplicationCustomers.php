<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 13/01/2017
 * Time: 09:16
 */

namespace Confee\Domains\ApplicationCustomers\Database\Migrations;

use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableApplicationCustomers extends Migration
{

    function up()
    {
        $this->schema->create('application_customers', function(Blueprint $table) {

            $table->integer('idApplication');
            $table->integer('idCustomer');

            $table->primary(array('idApplication', 'idCustomer'));
            $table->foreign('idApplication')->references('id')->on('applications');
            $table->foreign('idCustomer')->references('id')->on('customers');

            $table->timestamps();
        });
    }

    function down()
    {
        $this->schema->dropIfExists('application_customers');
    }
}