@extends('Layouts.AdminMain')
@section('content')
<style type="text/css">
	.marginTop{
		margin-top: 15px;
	}

	.btnSiguiente{

		margin-top: 33px;
		margin-left: 200px;
	}

	.btnSiguiente_f{
    margin-top: -57px;
    margin-left: 345px;
	}

	.btnAnterior_f{
		margin-top: 17px;
    	margin-left: 0px;
	}
    .btnAnteriror_S{

       margin-top: 17px;
        margin-left: 0px; 
    }

    .tamaño{

        width: 100%;
    }


</style>
<div class="x_title">
                    <h2>Empleados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                   <ul class="nav nav-tabs">
                    <li class="active"><a  href="#tab-1" data-toggle="tab">Datos Personales</a></li>
                    <li ><a  href="#tab-2" data-toggle="tab">Datos Profesionales</a></li>
                    <li ><a  href="#tab-3" data-toggle="tab">Sueldo</a></li>

               		 </ul>
                
                <div class="tab-content">
                              <!-- Tab Content 1 DATOS PERSONALES-->
                                <div class="tab-pane  fade in active" id="tab-1">
                        <div class="col-md-4 col-sm-6 col-xs-4">
                                {!!Form::open(array('url'=>'','class'=>'frmUser','method'=>'POST'))!!}

                                <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                <br>{!!Form::label('Cedula:')!!}
                                {!!Form::text('cedula',null,['id'=>'cedula', 'class'=>'form-control','placeholder'=>'Ingrese el numero de cedula','required'=>''])!!}

                                {!!Form::label('Apellido Paterno:')!!}
                                {!!Form::text('apellidoPaterno',null,['id'=>'apellidoPaterno_E', 'class'=>'form-control','placeholder'=>'Ingrese el apellido Paterno del Empleado','required'=>''])!!}

                                {!!Form::label('Apellido Materno:')!!}
                                {!!Form::text('apellidoMaterno',null,['id'=>'apellidoMaterno_E', 'class'=>'form-control','placeholder'=>'Ingrese el apellido Materno del Empleado','required'=>''])!!}

                                {!!Form::label('Nombres:')!!}
                                {!!Form::text('nombre',null,['id'=>'nombre_E', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Empleado','required'=>''])!!}

                                {!!Form::label('Genero:')!!}<br>
                                {!!Form::label('Masculino:')!!}
                                {!!Form::radio('sexo_E','Masculino',false)!!}
                                {!!Form::label('Femenino:')!!}
                                {!!Form::radio('sexo_E','Femenino',false)!!}<br>

                                 
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-4">

                                 <br><div class="form-group tamaño">
                                    <label for="disabledTextInput">Estado Civil</label>
                                    <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                        <option>Seleccione...</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>
                                	
                                {!!Form::label('Direccion:')!!}
                                {!!Form::text('direccion_E',null,['id'=>'direccion_E', 'class'=>'form-control','placeholder'=>'Ingrese la direccion','required'=>''])!!}
                                
                                {!!Form::label('Fecha de Nacimiento:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;     width: 51%;">
								    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
								     <input type="text" name="birthdate" value="10/24/1995" style="border: 0px;    width: 64%;" /> <b class="caret"></b>
								</div>
 
										<script type="text/javascript">
										$(function() {
										    $('input[name="birthdate"]').daterangepicker({
										        singleDatePicker: true,
										        showDropdowns: true
										    });
										});
										</script><br>

										<label for="Correo" class="marginTop">Correo</label>
                                {!!Form::text('correo_E',null,['id'=>'correo_E', 'class'=>'form-control','placeholder'=>'Ingrese el Correo','required'=>''])!!}

                                {!!Form::label('Telefono:')!!}
                                {!!Form::text('telefono_E',null,['id'=>'telefono_E', 'class'=>'form-control','placeholder'=>'Ingrese el telefono','required'=>''])!!}

                               
                              
                        </div>
                        <div class="col-md-4">
                                	 <div class="foto"><span type="file"></span>
                        				</div>
                        				<label class="uploader foto" ondragover="return false">
                           				 <i  class="fa fa-user fa-4x" aria-hidden="true"></i>
                            			<img src="" class="">
                          				  <input type="file" name="archivo" id="archivo" accept="image/*" required>
                       				 </label>
                                </div>
                                <div>
                                	<a href="#tab-2" data-toggle="tab" class="btnSiguiente btn btn-success">Siguiente</a>
                                </div>
                                
                                </div>

                                <!-- FIN tab 1 DATOS PROFESIONALES-->


                              <!-- Tab Content 2 FAMILIA -->
                                <div class="tab-pane" id="tab-2">
                        <div class="col-md-6 col-sm-6 col-xs-4">

                                <br>{!!Form::label('Fecha de Contratacion:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                     <input type="text" id="fechaContratacion_E" name="birthdate" value="10/24/1995" style="border: 0px;" /> <b class="caret"></b>
                                </div>
 
                                        <script type="text/javascript">
                                        $(function() {
                                            $('input[name="birthdate"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true
                                            });
                                        });
                                        </script><br> 

                                <br>{!!Form::label('Cargo:')!!}
                                {!!Form::text('cargo_E',null,['id'=>'cargo_E', 'class'=>'form-control','placeholder'=>'Ingrese el cargo de Empleado','required'=>''])!!}<br>

                                                              

                                <div>
                                	<a href="#tab-1" data-toggle="tab" class="btnAnterior_f btn btn-success">Anterior</a>
                                </div>
                                <div>
                                    <a href="#tab-3" data-toggle="tab" class="btnSiguiente_f btn btn-success">Siguiente</a>
                                </div>

                        </div>
                                  

                        <div class="col-md-6 col-sm-6 col-xs-4">                           

                              

                                
                        </div>          
               </div>
                                <!-- FIN tab 2 FAMILIA-->

                                <!-- tab 3 SUELDO-->

            <div class="tab-pane fade " id="tab-3">
                 <div class="form-group">
                     <div class="col-md-6 col-sm-6 col-xs-4">                           

                              {!!Form::label('Salario:')!!}
                                {!!Form::text('salario_E',null,['id'=>'salario_E', 'class'=>'form-control','placeholder'=>'Ingrese Sueldo de Empleado','required'=>''])!!}

                                {!!Form::label('Aportacion IESS:')!!}
                                {!!Form::text('aportacion_E',null,['id'=>'aportacion_E', 'class'=>'form-control','placeholder'=>'Ingrese porcentaje deAportacion','required'=>''])!!}

                                {!!Form::label('Id Rol:')!!}
                                {!!Form::text('idRol_E',null,['id'=>'idRol_E', 'class'=>'form-control','placeholder'=>'Ingrese numero Rol','required'=>''])!!}

                                <label for="disabledTextInput">Estatus</label>
                                    <select id="estatus_E" name="estatus_E" class="form-control text">
                                    <option>Seleccione Estatus</option>
                                        <option value="1">Medio tiempo</option>
                                        <option value="2">Tiempo Completo</option>
                                        
                                    </select>

                                    <label for="disabledTextInput">Carga Familiar</label>
                                    <select id="idCargaFamiliar" name="cargafamiliar" class="form-control text">
                                    <option>Seleccione carga Familiar</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>

                                    </select>


                                <div>
                                    <a href="#tab-2" data-toggle="tab" class="btnAnteriror_S btn btn-success">Anterior</a>
                                    <a href="#tab-2" data-toggle="tab" class="btnGuardarEmpleado btn btn-success">Guardar</a>
                                </div>
                    </div>   
                </div>
            </div>
           
                                <!-- FIN tab 3 SUELDO-->
              
                
{!!Form::close()!!}
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection


@section('scripts')
    <script>

        $(document).ready(function() {
            $("#btnGuardarEmpleado").click(function() {
            //var data=$(".frmRazas").serialize();
            var cedula = $('#cedula').val();
            var apellidoPaterno=$('#apellidoPaterno').val();
            var apellidoMaterno =$('#apellidoMaterno').val();
            var nombre =$('#nombre').val();
            var sexo =$('#sexo').val();
            var estadoCivil =$('#estadoCivil').val();
            var direccion =$('#direccion').val();
            var fechaNacimiento =$('#fechaNacimiento').val();
            var correo =$('#correo').val();
            var telefono =$('#telefono').val();
            var idPersona=$('#cedula').val();
            var idRol=$('#idRol_E').val();
            var cargo=$('#cargo_E').val();
            var fechaContratacion=$('fechaContratacion_E');
            var salario = $('salario_E');
            var estatus = $('estatus_E');
            var estadoCivil =$('estadoCivil_E')

            var token=$("#token").val();
           
            $.ajax({
                type    :'post',
                url     :'{!!URL::route('saveUsu')!!}',
                headers :{'X-CSRF-TOKEN': token},
                data    :{idTipoUser:idTipoUser,Usuario:Usuario,contrasena:contrasena},

                success:function(data){
                    alert(data.sms);
                    },error:function(){
                    alert(data.err);
                    
                }   
            });
            $('.frmUser')[0].reset();
            });
        });
        

    function cargar_datos(id){
    var route="http://localhost:8000/UsuariosId/" +id+"";  
    $.get(route,function(res){
      $("#Usuario").val(res.tipoProducto);

    })
    }
        </script>


@endsection