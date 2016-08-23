@extends('Layouts.AdminMain')
@section('content')
		<div class="row">
			<div class="cabeceraComunidad">
				<h3>Registro Comunidades</h3>
			</div>
		</div>
		<div class="row registraComunidad">
			<div class="col-md-6">
        {!!Form::open(['files'=>true, 'id'=>'comunidad'])!!}
        
         		<input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
         		@include('Adminbloopets.Comunidades.Form.comunidad')
         		{!!link_to('#', $title='Guardar', $attributes =['id'=>'btn_Comunidad', 'class'=>'btn btn-success btn-guardar'], $secure= null)!!}
         {!!Form::close()!!}
     		</div>	
     	</div>


@endsection

