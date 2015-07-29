					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Código</th>
							<th>Departamento Perteneciente</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($asignaturas as $asignaturas)
							<td>{{ $asignaturas->id }}</td>
							<td>{{ $asignaturas->nombre }}</td>
							<td>{{ $asignaturas->codigo }}</td>
							<td>{{ $asignaturas->departamento->nombre }}</td>
							<td>{{ $asignaturas->descripcion }}</td>
							<td>
								<a href="{{ route('ecampus.asignaturas.edit', $asignaturas->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>