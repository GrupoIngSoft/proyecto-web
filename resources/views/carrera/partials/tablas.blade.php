					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Código</th>
							<th>Escuela Perteneciente</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($carrera as $carrera)
							<td>{{ $carrera->id }}</td>
							<td>{{ $carrera->nombre }}</td>
							<td>{{ $carrera->codigo }}</td>
							<td>{{ $carrera->escuela->nombre }}</td>
							<td>{{ $carrera->descripcion }}</td>
							<td>
								<a href="{{ route('carrera.edit', $carrera->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>