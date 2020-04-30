<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleFacturaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factura_id')->unsigned();
            $table->integer('services_id')->unsigned();
            //$table->integer('cantidad');
            //$table->integer('valor');
            $table->timestamps();
            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreign('services_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_factura');
    }
}
