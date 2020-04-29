<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->string('modelo');
            $table->string('color');
            $table->integer('brand_id')->unsigned();
            $table->integer('person_id')->unsigned();
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('car');
    }
}
