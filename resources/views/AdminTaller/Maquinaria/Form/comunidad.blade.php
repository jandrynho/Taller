{!!Form::label('Nombre de la Comunidad:')!!}
{!!Form::text('nombre',null,['id'=>'nombre', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de la comunidad','required'=>''])!!}
{!!Form::label('Descripción de la Comunidad:')!!}
{!!Form::textarea('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese una breve descripción de la comunidad(opcional)','required'=>'','rows'=>'3' ])!!}
{!!Form::label('Imagen:')!!}
{!!Form::file('archivo',null,['id'=>'archivo','accept'=>'image/*']);!!} 

