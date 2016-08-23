<!-- Vista crear comunidades
	@autor: jhony Guaman
	@fecha: 31/03/2016
	@descripcion: la vista contiene un formulario para almacenar los diferentes tipos de comunidades-->
@extends('Layouts.AdminMain')
@section('content')
		<div class="row">
			<div class="cabeceraComunidad">
				<h3>Registro Comunidades</h3>
			</div>
		</div>
		<div class="row registraComunidad">
			<div class="col-md-6">
         {!!Form::open()!!}
         		 {!!Form::label('Nombre de la Comunidad:')!!}
				 {!!Form::text('nombre',null,['id'=>'nombre', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de la comunidad','required'=>''])!!}
         		 {!!Form::label('Descripción de la Comunidad:')!!}
				 {!!Form::textarea('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese una breve descripción de la comunidad(opcional)','required'=>'','rows'=>'3' ])!!}
				 {!!Form::submit('Guardar',['class'=>'btn btn-success btn-guardar', 'id'=>'guardar'])!!}
         {!!Form::close()!!}
     		</div>	
     	</div>

@endsection
<!-- @section('scripts')
		<script>
		$(document).ready(function() {
			$("#guardar").click(function() {
			var comunidad=$('#nombre').val();
			var descripcion=$('#descripcion').val();

			alert(comunidad+' '+descripcion);
			$.ajax({
				type 	:'post',
				url		:'{!!URL::route('welcomeAdmin/Comunidades')!!}',
				dataType:'json',
				data 	:{comunidad:comunidad,descripcion:descripcion},
				success:function(data){
					alert(data.sms);
				},error:function(){
					alert(data.err);
				}	
			});
			//$('.frmRazas')[0].reset();
			});
		});
		</script>
@endsection -->