<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maquinaria extends Model
{
   protected $fillable = [
        'maquina',
        'peso',
        'modelo',
        'fechaIngreso',
        'direccion',
        'fechaDeterioro'
       ];

       
}
