<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnFromHealthCentersTable extends Migration
{
    public function up()
    {
        Schema::table('health_centers', function (Blueprint $table) {
            $table->dropColumn('vaccines');
        });
    }

    public function down()
    {
        Schema::table('health_centers', function (Blueprint $table) {
            //
        });
    }
}
