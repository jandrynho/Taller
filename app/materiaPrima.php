<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materiaPrima extends Model
{
     protected $fillable = [
        'material','precio','stock','idProveedor',
    ];


    public function MaterialProductos(){
    	return $this->hasMany(materialProducto::class);
    }  

    public function proveedores(){
    	return $this->belongsto(proveedore::class);
    } 
    public function detalleFacturaMaterialPrimas(){
    	return $this->hasmany(detalleMateriaPrima::class);
    }
}

