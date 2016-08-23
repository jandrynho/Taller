<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleFacturaProducto extends Model
{
    protected $fillable = [
        'cantidad',
        'idProducto',
        'precioUnitario',
        'subtotal'
        
         ];

         public function facturaVentas(){
    	return $this->belongsto(factura::class);
    } 
     public function productos(){
    	return $this->belongsto(producto::class);
    }

    public function facturaCompras(){
        return $this->belongsto(facturaCompra::class);
    } 
}
