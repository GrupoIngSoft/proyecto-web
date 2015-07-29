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
						@foreach($cursos as $cursos)
							<td>{{ $cursos->id }}</td>
							<td>{{ $cursos->asignatura->nombre }}</td>
							<td>{{ $cursos->docente->nombres }}</td>
							<td>{{ $cursos->semestre }}</td>
							<td>{{ $cursos->anio }}</td>
							<td>{{ $cursos->seccion }}</td>
							<td>
								<a href="{{ route('ecampus.cursos.edit', $cursos->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>