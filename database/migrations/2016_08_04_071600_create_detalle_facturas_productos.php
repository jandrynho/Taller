<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturasProductos extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('idProducto')->unsigned();
            $table->decimal('precioUnitario');
            $table->decimal('subtotal');
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrat
     ons.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_facturas_productos');
    }
}
