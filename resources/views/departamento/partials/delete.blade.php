{!! Form::open(['route'=>['departamento.destroy', $departamento], 'method'=>'DELETE']) !!}
  <button type="submit" onclick="return confirm('¿Seguro que desea eliminar el registro?')" class="btn btn-danger">Eliminar</button>
{!! Form::close() !!}