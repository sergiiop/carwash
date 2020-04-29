<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->integer('car_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('observation');
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('car_id')->references('id')->on('car');
            $table->foreign('status_id')->references('id')->on('Invoice_Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('factura');
    }
}
