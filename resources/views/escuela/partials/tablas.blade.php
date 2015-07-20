					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Departamento Perteneciente</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($escuela as $escuela)
							<td>{{ $escuela->id }}</td>
							<td>{{ $escuela->nombre }}</td>
							<td>{{ $escuela->departamento->nombre }}</td>
							<td>{{ $escuela->descripcion }}</td>
							<td>
								<a href="{{ route('escuela.edit', $escuela->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>