<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCitizensTable extends Migration
{

    public function up()
    {
        Schema::table('citizens', function (Blueprint $table) {
            $table->string('gender')->after('lastname');
            $table->unsignedInteger('dose')->nullable()->default(0)->after('dob');
            $table->string('phone')->unique()->after('dob');
        });
    }


    public function down()
    {
        Schema::table('citizens', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('phone');
            $table->dropColumn('dose');
        });
    }
}
