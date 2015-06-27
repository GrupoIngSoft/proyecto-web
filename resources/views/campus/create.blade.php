<html>
<body>
<p>Formulario creacion campus</p>

{!! Form::open(['route' => 'campus.store']) !!}
	{!! Form::label('Nombre') !!}
	{!! Form::text('nombre') !!}
	{!! Form::label('Direccion') !!}
	{!! Form::text('direccion') !!}
	{!! Form::label('Latitud') !!}
	{!! Form::text('latitud') !!}
	{!! Form::label('longitud') !!}
	{!! Form::text('longitud') !!}
	{!! Form::label('Descripcion') !!}
        {!! Form::textarea('descripcion') !!}
	{!! Form::label('Rut Encargado') !!}
	{!! Form::text('rut_encargado') !!}
	{!! Form::submit() !!}
{!! Form::close() !!}
</body>
</html>
