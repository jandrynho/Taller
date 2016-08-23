<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMaterialProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_material_productos', function (Blueprint $table) {
            $table->integer('idMaterial')->unsigned();
            $table->integer('idProveedeor')->unsigned();
            $table->foreign('idMaterial')->references('id')->on('materia_primas');
            $table->foreign('idProveedeor')->references('id')->on('proveedores');
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
        Schema::drop('detalle_material_productos');
    }
}
