					<table class="table table-striped">
						<tr>
							<th>Campus</th>
							<th>Sala Asignada</th>
							<th>Bloque</th>
							<th>Inicio</th>
							<th>Fin</th>
							<th>Asignatura</th>
							<th>Codigo</th>
							<th>Semestre del Curso</th>
							<th>Año del Curso</th>
						</tr>
						@foreach($horarios as $horarios)
							<td>{{ $horarios->sala->campus->nombre }}</td>
							<td>{{ $horarios->sala->nombre }}</td>
							<td>{{ $horarios->periodo->bloque }}</td>
							<td>{{ $horarios->periodo->inicio }}</td>
							<td>{{ $horarios->periodo->fin }}</td>
							<td>{{ $horarios->curso->asignatura->nombre }}</td>
							<td>{{ $horarios->curso->asignatura->codigo }}</td>
							<td>{{ $horarios->curso->semestre }}</td>
							<td>{{ $horarios->curso->anio }}</td>
						@endforeach
					</table>