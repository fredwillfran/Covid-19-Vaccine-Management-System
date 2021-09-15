<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('national_id')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->unsignedInteger('dose')->default(0);
            $table->string('email')->unique();
            $table->unsignedInteger('phone')->unique();
            $table->string('city');
            $table->string('district');
            $table->string('sector');
            $table->date('dob');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}
