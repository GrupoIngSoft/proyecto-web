					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Código</th>
							<th>Departamento Perteneciente</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($asignatura as $asignatura)
							<td>{{ $asignatura->id }}</td>
							<td>{{ $asignatura->nombre }}</td>
							<td>{{ $asignatura->codigo }}</td>
							<td>{{ $asignatura->departamento->nombre }}</td>
							<td>{{ $asignatura->descripcion }}</td>
							<td>
								<a href="{{ route('asignatura.edit', $asignatura->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>