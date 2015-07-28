					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Campus Perteneciente</th>
							<th>Tipo de Sala</th>
							<th>Nombre</th>
							<th>Capacidad</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($sala as $sala)
							<td>{{ $sala->id }}</td>
							<td>{{ $sala->campus->nombre }}</td>
							<td>{{ $sala->tiposala->nombre }}</td>
							<td>{{ $sala->nombre }}</td>
							<td>{{ $sala->capacidad }}</td>
							<td>{{ $sala->descripcion }}</td>
							<td>
								<a href="{{ route('admin.sala.edit', $sala->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>