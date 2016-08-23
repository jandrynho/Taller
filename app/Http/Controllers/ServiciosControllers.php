<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicio;
use DB;
use App\Http\Requests;

class ServiciosControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = \App\servicio::All();
        return view('AdminTaller.Servicios.CrearServicios',compact('servicios'));
    }


public function save(Request $request){

        try{
        $servicios = new servicio;
        $servicios ->servicios=$request->servicio;
        $servicios ->save();
        return response()->json(array('sms'=>'true'));
        }catch(Excetion $e){
        return response()->json(array('err'=>'false'));

        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = \App\servicio::All();
        return view('AdminTaller.Servicios.CrearServicios', compact('servicios'));
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
            \App\servicio::create([
            'servicio'=>$request->servicio,
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
      $servicios = servicio::find($id);
      return response()->json($servicios->toArray());

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
        $servicios = servicio::find($id);
        $servicios->fill($request->all());
        $servicios->save();
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
