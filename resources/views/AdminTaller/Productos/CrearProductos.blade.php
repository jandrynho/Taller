@extends('Layouts.AdminMain')
@section('content')
<h2>Productos</h2>
<div class="panel panel-default">

    <div class="panel-body">
            <div class="col-md-12 registro">
                <div class="col-md-6">
                     
                     {!!Form::open(array('url'=>'','class'=>'frmProductos','method'=>'POST'))!!}
                    
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                 
                                 <div class="form-group">
                                    <label for="disabledTextInput">Productos</label>
                                    <select id="idProducto" name="idProducto" class="form-control text">
                                    <option>Seleccione Producto</option>
                                    @foreach($CategoriaProductos as $catePro)
                                        <option value="{{$catePro->id}}"> {{$catePro->tipoProducto}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                {!!Form::label('Stock:')!!}
                                {!!Form::text('stock',null,['id'=>'stock', 'class'=>'form-control','placeholder'=>'Ingrese el Stock de Productos','required'=>''])!!}

                                <!--{!!Form::label('Porcentaje de Ganancia:')!!}
                                {!!Form::text('porcentajeGanancia',null,['id'=>'porcentajeGanancia', 'class'=>'form-control','placeholder'=>'Ingrese Porcentaje de Ganancias','required'=>''])!!}-->

                                {!!Form::label('Precio:')!!}
                                {!!Form::text('precio',null,['id'=>'precio', 'class'=>'form-control','placeholder'=>'Ingrese Precio','required'=>''])!!}

                                {!!Form::label('Descripcion:')!!}
                                {!!Form::text('desccripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese Descripcion de Producto','required'=>''])!!}


                     {!!Form::close()!!}

                                {!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_GuardarProductos', 'class'=>'btn btn-success btn-guardar'], $secure= null)!!}              
                   
                </div>  
               
        </div> <!--fin del div registro -->
     </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#btn_GuardarProductos").click(function() {
            //var data=$(".frmRazas").serialize();
            var IdProducto = $('#idProducto').val();
            var Stock=$('#stock').val();
            var Precio =$('#precio').val();
            var Descripcion =$('#descripcion').val();
            var token=$("#token").val();
            alert(IdProducto);
            alert(Stock);
            alert(Precio);
            alert(Descripcion);
            $.ajax({
                type    :'post',
                url     :'{!!URL::route('saveProdu')!!}',
                headers :{'X-CSRF-TOKEN': token},
                data    :{IdProducto:IdProducto,Stock:Stock,Precio:Precio,Descripcion:Descripcion},

                success:function(data){
                    alert(data.sms);
                    },error:function(){
                    alert(data.err);
                    
                }   
            });
            $('.frmProductos')[0].reset();
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