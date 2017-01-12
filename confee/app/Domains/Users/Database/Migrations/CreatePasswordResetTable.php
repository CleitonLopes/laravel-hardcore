<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 22/12/2016
 * Time: 09:06
 */

namespace Confee\Domains\Users\Database\Migrations;


use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordResetTable extends Migration
{

    function up()
    {
        $this->schema->create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
        });
    }

    function down()
    {
        $this->schema->dropIfExists('password_resets');
    }
}