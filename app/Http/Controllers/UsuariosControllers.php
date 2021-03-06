<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Requests;

class UsuariosControllers extends Controller
{
    /**
     * Display a listing of the resource.
     * $CategoriaUsuarios = CategoriaUser::find($id);
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usuarios = User::All();
      $CategoriaUsuarios = \App\categoriaUser::All();

      return view('AdminTaller.Usuarios.ActualizarUsuarios',compact('Usuarios','CategoriaUsuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Usuarios = \App\User::All();
      $CategoriaUsuarios = \App\categoriaUser::All();
      return view('AdminTaller.Usuarios.CrearUsuarios', compact('Usuarios','CategoriaUsuarios'));
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
            \App\User::create([
            'idCategoria'=>$request->idTipoUser,
            'user'=>$request->Usuario,
            'password'=>bcrypt($request->contrasena),
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
      $Usuarios = User::find($id);
      return response()->json($Usuarios->toArray());
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
        $Usuarios = User::find($id);
        $Usuarios->fill($request->all());
        $Usuarios->save();
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
        $Usuarios = User::find($id);
        $Usuarios = $Usuarios->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
     
    }
}
