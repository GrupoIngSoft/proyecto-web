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
						@foreach($salas as $salas)
							<td>{{ $salas->id }}</td>
							<td>{{ $salas->campus->nombre }}</td>
							<td>{{ $salas->tiposala->nombre }}</td>
							<td>{{ $salas->nombre }}</td>
							<td>{{ $salas->capacidad }}</td>
							<td>{{ $salas->descripcion }}</td>
							<td>
								<a href="{{ route('ecampus.salas.edit', $salas->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>