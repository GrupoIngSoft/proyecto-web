					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Fecha</th>
							<th>Sala Asignada</th>
							<th>Bloque</th>
							<th>Inicio</th>
							<th>Fin</th>
							<th>Asignatura</th>
							<th>Codigo</th>
							<th>Semestre del Curso</th>
							<th>Año del Curso</th>
							<th>Acciones</th>
						</tr>
						@foreach($horarios as $horarios)
							<td>{{ $horarios->id }}</td>
							<td>{{ $horarios->fecha }}</td>
							<td>{{ $horarios->salas->nombre }}</td>
							<td>{{ $horarios->periodo->bloque }}</td>
							<td>{{ $horarios->periodo->inicio }}</td>
							<td>{{ $horarios->periodo->fin }}</td>
							<td>{{ $horarios->cursos->asignaturas->nombre }}</td>
							<td>{{ $horarios->cursos->asignaturas->codigo }}</td>
							<td>{{ $horarios->cursos->semestre }}</td>
							<td>{{ $horarios->cursos->anio }}</td>
							<td>
								<a href="{{ route('ecampus.horario.edit', $horarios->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>