					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Docente Encargado</th>
							<th>Semestre</th>
							<th>Año</th>
							<th>Sección</th>
							<th>Acciones</th>
						</tr>
						@foreach($curso as $curso)
							<td>{{ $curso->id }}</td>
							<td>{{ $curso->asignatura->nombre }}</td>
							<td>{{ $curso->docente->nombres }}</td>
							<td>{{ $curso->semestre }}</td>
							<td>{{ $curso->anio }}</td>
							<td>{{ $curso->seccion }}</td>
							<td>
								<a href="{{ route('admin.curso.edit', $curso->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>