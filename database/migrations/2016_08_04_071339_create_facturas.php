<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturas extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned();
            $table->string('fecha');
            $table->string('subtotal');
            $table->string('iva12');
            $table->string('descuento');
            $table->string('iva0');
            $table->string('totalPagar');
            $table->integer('idtipoFactura')->unsigned();
            $table->foreign('idCliente')->references('id')->on('proveedores');
            $table->foreign('idtipoFactura')->references('id')->on('tipoFacturas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facturas');
    }
}
