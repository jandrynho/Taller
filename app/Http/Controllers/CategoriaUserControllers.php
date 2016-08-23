<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoriaUser;
use DB;
use App\Http\Requests;

class CategoriaUserControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CategoriaUser = \App\categoriaUser::All();
        return view('AdminTaller.CategoriaUsuarios.CrearCategoriaUsuarios',compact('CategoriaUser'));
    }
public function save(Request $request){

        try{
        $CategoriaUser = new CategoriaUser;
        $CategoriaUser ->CategoriaUser=$request->tipoUser;
        $CategoriaUser ->save();
        return response()->json(array('sms'=>'true'));
        }catch(Excetion $e){
        return response()->json(array('err'=>'false'));

        }

    }
    public function create()
    {
        $CategoriaUser = \App\categoriaUser::All();
        return view('AdminTaller.CategoriaUsuarios.CrearCategoriaUsuarios', compact('CategoriaUser'));
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
            \App\CategoriaUser::create([
            'tipoUser'=>$request->tipoUser,
            ]);
        return response()->json(array('sms'=>'Registro Correcto'));
        }catch(Excetion $e){
        return response()->json(array('sms'=>'Error al registrar'));
        }
    }
}
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
    $CategoriaUser = \App\categoriaUser::find($id);
    return response()->json($CategoriaUser->toArray());
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
        $CategoriaUser = categoriaUser::find($id);
        $CategoriaUser->fill($request->all());
        $CategoriaUser->save();
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
        //
    }
}
