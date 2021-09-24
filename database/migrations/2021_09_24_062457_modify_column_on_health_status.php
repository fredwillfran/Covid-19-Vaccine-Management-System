<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnOnHealthStatus extends Migration
{

    public function up()
    {
        Schema::table('health_statuses', function (Blueprint $table) {
            $table->text('ncd_description')->nullable()->change();
            $table->text('vaccine_effect')->nullable()->change();
        });
    }


    public function down()
    {
        Schema::table('health_statuses', function (Blueprint $table) {
            //
        });
    }
}
