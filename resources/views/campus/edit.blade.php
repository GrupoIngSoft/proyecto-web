<html>

{!! Form::open(array('route' => array('campus.update', $campus->id), 'method' => 'put')) !!}
{!! Form::label('Nombre') !!}
        {!! Form::text('nombre', $campus->nombre) !!}
        {!! Form::label('Direccion') !!}
        {!! Form::text('direccion', $campus->direccion) !!}
        {!! Form::label('Latitud') !!}
        {!! Form::text('latitud', $campus->latitud) !!}
        {!! Form::label('longitud') !!}
        {!! Form::text('longitud', $campus->longitud) !!}
        {!! Form::label('Descripcion') !!}
        {!! Form::textarea('descripcion', $campus->descripcion) !!}
        {!! Form::label('Rut Encargado') !!}
        {!! Form::text('rut_encargado', $campus->rut_encargado) !!}
        {!! Form::submit() !!}
{!! Form::close() !!}

</html>