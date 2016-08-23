<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//termina rutas de administracion
//ruta para ingresar servicios en administracion
Route::post('welcomeAdmin/Servicios/agregarServicio',array('as'=>'saveServios','uses'=>'ServiciosControllers@store'));
Route::resource('welcomeAdmin/Servicios','ServiciosControllers');
//fin ruta para ingresar servicios en administracion

//ruta para ingresar categoria usuarios en administracion
Route::post('welcomeAdmin/CategoriaUsuarios/agregarCategoriaUsuarios',array('as'=>'saveCateUsu','uses'=>'CategoriaUserControllers@store'));
Route::resource('welcomeAdmin/CategoriaUsuarios','CategoriaUserControllers');
//fin ruta para ingresar categoria usuarios en administracion



//ruta para ingresar usuarios en administracion
Route::post('welcomeAdmin/Usuarios/agregarUsuarios',array('as'=>'saveUsu','uses'=>'UsuariosControllers@store'));
Route::resource('welcomeAdmin/Usuarios','UsuariosControllers');
//fin ruta para ingresar usuarios en administracion

//ruta para ingresar empleados en administracion
Route::post('welcomeAdmin/Empleados/agregarEmpleados',array('as'=>'saveEmple','uses'=>'EmpleadoControllers@store'));
Route::resource('welcomeAdmin/Empleados','EmpleadoControllers');
//fin ruta para ingresar empleados en administracion

//ruta para ingresar categoriasProductos en administracion
Route::post('welcomeAdmin/CategoriaProductos/agregarCategoriaProductos', array('as'=>'saveInfo','uses'=>'CategoriaProductosControllers@store'));
Route::resource('welcomeAdmin/CategoriaProductos','CategoriaProductosControllers');
//fin ruta para ingresar categoriaproductos en administracion

//ruta para ingresar Productos en administracion
Route::post('welcomeAdmin/Productos/agregarProductos',array('as'=>'saveProdu','uses'=>'ProductosControllers@store'));
Route::resource('welcomeAdmin/Productos','ProductosControllers');
//fin ruta para ingresar Productos en administracion

//ruta para ingresar Proovedores en administracion
Route::post('welcomeAdmin/Proveedores/agregarProveedores',array('as'=>'saveProvee','uses'=>'ProveedoresControllers@store'));
Route::resource('welcomeAdmin/Proveedores','ProveedoresControllers');
//fin ruta para ingresar Proovedores en administracion

//ruta para ingresar Proovedores en administracion
Route::post('welcomeAdmin/Clientes/agregarClientes',array('as'=>'saveClie','uses'=>'ClientesControllers@store'));
Route::resource('welcomeAdmin/Clientes','ClientesControllers');
//fin ruta para ingresar Proovedores en administracion

//ruta para ingresar usuarios en administracion
Route::post('welcomeAdmin/Usuarios/agregarUsuarios',array('as'=>'saveUsu','uses'=>'UsuariosControllers@store'));
Route::resource('welcomeAdmin/Usuarios','UsuariosControllers');
//fin ruta para ingresar usuarios en administracion

//cargar datos de  categoria productos
route::get('CategoriaProductoid/{id}','CategoriaProductosControllers@edit');
//fin cargar categoria productos

//cargar datos de servicios
route::get('servicioid/{id}','ServiciosControllers@edit');
//fin cargar datos servicios

//cargar datos de Producttos
route::get('Productosid/{id}','ProductosControllers@edit');
//fin cargar datos Productos

//cargar datos de categoria usuarios
route::get('CategoriaUsuariosId/{id}','CategoriaUserControllers@edit');
//fin cargar datos de categoria Usuarios

//cargar datos de usuarios
//route::get('UsuariosId/{id}','UsuariosControllers@edit');
//fin cargar datos de Usuarios





// rutas login
Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
	if (Auth::guest()){
			 return view('welcome');
    	}else{
    		 return Redirect::to('welcomeAdmin/home');
    	}
    });
	Route::post('log',array('as'=>'login', 'uses'=>'LogController@store'));
	Route::get('logout','LogController@logout');
	Route::get('welcomeAdmin/home', 'HomeController@index');
});

