<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinesTable extends Migration
{
    public function up()
    {
        Schema::create('vaccines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('health_center_id');
            $table->string('type')->unique();
            $table->unsignedBigInteger('quantity');
            $table->timestamps();

            $table->foreign('health_center_id')->references('id')->on('health_centers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaccines');
    }
}
