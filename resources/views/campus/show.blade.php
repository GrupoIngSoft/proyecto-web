<p>Nombre: {{ $campus->nombre }}</p>
<p>Direccion: {{ $campus->direccion }}</p>


{!! Form::open(['route' => array('campus.destroy', $campus->id), 'method' => 'delete']) !!}
{!! Form::submit('Eliminar registro') !!}
{!! Form::close() !!}