<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProveedor')->unsigned();
            $table->date('fecha');
            $table->integer('idTipoFactura')->unsigned();
            $table->string('subtotal');
            $table->string('iva12');
            $table->string('iva0');
            $table->string('descuento');
            $table->string('totalPagar');
            $table->string('nombreRepartidor');
            $table->string('cedulaRepartidor');
            $table->foreign('idTipoFactura')->references('id')->on('tipoFacturas');
            $table->foreign('idProveedor')->references('id')->on('proveedores');
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
        Schema::drop('factura_compras');
    }
}
