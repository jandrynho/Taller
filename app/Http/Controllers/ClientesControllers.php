<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\persona;
use App\Http\Requests;
use DB;

class ClientesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clientes = DB::select("SELECT * FROM `personas`,clientes WHERE personas.cedula=clientes.cedula");
    
      return view('AdminTaller.Clientes.AdministrarCliente',compact('Clientes'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Clientes = \App\cliente::All();
      //$CategoriaUsuarios = \App\categoriaUser::All();
      return view('AdminTaller.Clientes.CrearClientes', compact('Clientes'));
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
                        \App\persona::create([
                        'cedula'=>$request->cedula,
                        'apellidoPaterno'=>$request->apellidoPaterno,
                        'apellidoMaterno'=>$request->apellidoMaterno,
                        'nombre'=>$request->nombre,
                        'sexo'=>$request->sexo,
                        'estadoCivil'=>$request->estadoCivil,      
                        'direccion'=>$request->direccion,           
                        'fechaNacimiento'=>$request->fechaNacimiento, 
                        'correo'=>$request->correo,           
                        'telefono'=>$request->telefono,            
                     ]);

                         \App\cliente::create([
                        'cedula'=>$request->cedula,        
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
        $Personas = DB::select("SELECT * FROM personas,clientes WHERE personas.cedula=clientes.cedula and clientes.cedula=$id");
        return response()->json($Personas->toArray());
        //return $Personas;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
