					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Rut</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Email</th>
							<th>Carrera Perteneciente</th>
							<th>Acciones</th>
						</tr>
						@foreach($estudiante as $estudiante)
							<td>{{ $estudiante->id }}</td>
							<td>{{ $estudiante->rut }}</td>
							<td>{{ $estudiante->nombres }}</td>
							<td>{{ $estudiante->apellidos }}</td>
							<td>{{ $estudiante->email }}</td>
							<td>{{ $estudiante->carrera->nombre }}</td>
							<td>
								<a href="{{ route('estudiante.edit', $estudiante->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>