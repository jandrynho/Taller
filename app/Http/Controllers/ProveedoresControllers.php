<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedore;
use DB;
use App\Http\Requests;

class ProveedoresControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Proveedores = \App\proveedore::All();
     // $CategoriaUsuarios = \App\categoriaUser::All();
      return view('AdminTaller.Proveedores.AdministrarProveedores', compact('Proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Proveedores = \App\proveedore::All();
     // $CategoriaUsuarios = \App\categoriaUser::All();
      return view('AdminTaller.Proveedores.CrearProveedores', compact('Proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
    try{
            \App\proveedore::create([
            'nombreEmpresa'=>$request->nombreEmpresa,
            'ruc'=>$request->ruc,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'correo'=>$request->correo,
            'representante'=>$request->representante,           
            ]);
        return response()->json(array('sms'=>'Registro Correcto'));
        }catch(Excetion $e){
        return response()->json(array('sms'=>'Error al registrar'));
        }
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Proveedores = proveedore::find($id);
      return response()->json($Proveedores->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Proveedores = proveedore::find($id);
        $Proveedores->fill($request->all());
        $Proveedores->save();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Proveedores = proveedore::find($id);
        $Proveedores = $Proveedores->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }
}
