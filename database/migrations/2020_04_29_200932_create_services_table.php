<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('type_services_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();
            $table->foreign('type_services_id')->references('id')->on('type_services');
            $table->foreign('status_id')->references('id')->on('Services_Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('services');
    }
}
