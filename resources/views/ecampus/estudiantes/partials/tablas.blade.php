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
						@foreach($estudiantes as $estudiantes)
							<td>{{ $estudiantes->id }}</td>
							<td>{{ $estudiantes->rut }}</td>
							<td>{{ $estudiantes->nombres }}</td>
							<td>{{ $estudiantes->apellidos }}</td>
							<td>{{ $estudiantes->email }}</td>
							<td>{{ $estudiantes->carrera->nombre }}</td>
							<td>
								<a href="{{ route('ecampus.estudiantes.edit', $estudiantes->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>