<?php

/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/01/2017
 * Time: 16:10
 */

namespace Confee\Domains\ApplicationExtensionType\Database\Migrations;

use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableApplicationExtensionType extends Migration
{


    function up()
    {
        $this->schema->create('application_extension_type', function(Blueprint $table) {

            $table->integer('idApplication');
            $table->integer('idExtensionType');

            $table->primary(array('idApplication', 'idExtensionType'));
            $table->foreign('idApplication')->references('id')->on('applications');
            $table->foreign('idExtensionType')->references('id')->on('extension_type');

        });
    }

    function down()
    {
        $this->schema->dropIfExists('applications_extension_type');
    }
}