{!! Form::open(['route'=>['admin.rolusuario.destroy', $rolusuario], 'method'=>'DELETE']) !!}
  <button type="submit" onclick="return confirm('¿Seguro que desea eliminar el registro?')" class="btn btn-danger">Eliminar</button>
{!! Form::close() !!}