					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Bloque</th>
							<th>Inicio</th>
							<th>Fin</th>
							<th>Acciones</th>
						</tr>
						@foreach($periodo as $periodo)
							<td>{{ $periodo->id }}</td>
							<td>{{ $periodo->bloque }}</td>
							<td>{{ $periodo->inicio }}</td>
							<td>{{ $periodo->fin }}</td>
							<td>
								<a href="{{ route('admin.periodo.edit', $periodo->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>