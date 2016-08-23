<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materialProducto extends Model
{
 protected $fillable = [
        'idMateria','idProducto'
    ];


    public function productos(){
    	return $this->belongsto(producto::class);

    } 

    public function materiaPrimas(){
    	return $this->belongsto(materiaPrima::class);

    } 
}
