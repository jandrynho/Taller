@extends('Layouts.AdminMain')
@section('content')
<h2>Clientes</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmClie','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                {!!Form::label('Cedula:')!!}
                                {!!Form::text('cedula',null,['id'=>'cedula', 'class'=>'form-control','placeholder'=>'Ingrese el numero de cedula','required'=>''])!!}

                                {!!Form::label('Apellido Paterno:')!!}
                                {!!Form::text('apellidoPaterno',null,['id'=>'apellidoPaterno', 'class'=>'form-control','placeholder'=>'Ingrese el apellido Paterno del Empleado','required'=>''])!!}

                                {!!Form::label('Apellido Materno:')!!}
                                {!!Form::text('apellidoMaterno',null,['id'=>'apellidoMaterno', 'class'=>'form-control','placeholder'=>'Ingrese el apellido Materno del Empleado','required'=>''])!!}

                                {!!Form::label('Nombres:')!!}
                                {!!Form::text('nombre',null,['id'=>'nombre', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Empleado','required'=>''])!!}

                                {!!Form::label('Genero:')!!}<br>
                                {!!Form::label('Masculino:')!!}
                                {!!Form::radio('sexo','Masculino',false,['id'=>'sexo'])!!}
                                {!!Form::label('Femenino:')!!}
                                {!!Form::radio('sexo','Femenino',false,['id'=>'sexo'])!!}<br>
                                
                                <!--<div class="radio" id="sexo">
                                <label>
                                    {!! Form::radio('sexo', 'masculino') !!}
                               </label>
                                </div>-->



                                 
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-4">

                                 <div class="form-group tamaño">
                                    <label for="disabledTextInput">Estado Civil</label>
                                    <select id="estadoCivil" name="estadoCi" class="form-control text">
                                        <option>Seleccione Estado Civil</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                </div>
                                    
                                {!!Form::label('Direccion:')!!}
                                {!!Form::text('direccion',null,['id'=>'direccion', 'class'=>'form-control','placeholder'=>'Ingrese la direccion','required'=>''])!!}
                                
                                <br>{!!Form::label('Fecha de Nacimiento:')!!}
                                    <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;     width: 51%;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                     <input type="text" id="fechaNacimiento" name="birthdate" value="10/24/1995" style="border: 0px;    width: 64%;" /> <b class="caret"></b>
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
                                {!!Form::text('correo',null,['id'=>'correo', 'class'=>'form-control','placeholder'=>'Ingrese el Correo','required'=>''])!!}

                                {!!Form::label('Telefono:')!!}
                                {!!Form::text('telefono',null,['id'=>'telefono', 'class'=>'form-control','placeholder'=>'Ingrese el telefono','required'=>''])!!}

                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_GuardarClientes', 'class'=>'btn btn-success btn-guardar'], $secure= null)!!}              
                   
                </div>  
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#btn_GuardarClientes").click(function() {
            //var data=$(".frmRazas").serialize();
            var cedula = $('#cedula').val();
            var apellidoPaterno=$('#apellidoPaterno').val();
            var apellidoMaterno =$('#apellidoMaterno').val();
            var nombre =$('#nombre').val();
            var sexo =$('#sexo').val();
            alert(sexo);
            var estadoCivil =$('#estadoCivil').val();
            var direccion =$('#direccion').val();
            var fechaNacimiento =$('#fechaNacimiento').val();
            var correo =$('#correo').val();
            var telefono =$('#telefono').val();
            var idPersona=$('#cedula').val();
            var token=$("#token").val();
            $.ajax({
                type    :'post',
                url     :'{!!URL::route('saveClie')!!}',
                headers :{'X-CSRF-TOKEN': token},
                data    :{cedula:cedula,apellidoPaterno:apellidoPaterno,apellidoMaterno:apellidoMaterno,nombre:nombre,
                          sexo:sexo,estadoCivil:estadoCivil,direccion:direccion,fechaNacimiento:fechaNacimiento, fechaNacimiento:fechaNacimiento,correo:correo,telefono:telefono,idPersona:idPersona},
                success:function(data){
                    alert(data.sms);
                    },error:function(){
                    alert(data.err);
                    
                }   
            });
            $('.frmClie')[0].reset();
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