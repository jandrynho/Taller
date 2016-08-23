<?php

namespace App;
precioUnitario
use Illuminate\Database\Eloquent\Model;

class facturaCompra extends Model
{
    protected $fillable = [
        'idProveedor',
        'fecha',
        'idTipoFactura',
        'subtotal',
        'iva12',
        'iva0',
        'descuento',
        'totalPagar',
        'nombreRepartidor',
        'cedulaRepartidor',

        ];

        public function detalleFacturaProductos(){
    	return $this->hasmany(detalleFacturaProducto::class);
    } 
    public function tipoFacturas(){
    	return $this->belongsto(tipoFactura::class);
    } 
}
