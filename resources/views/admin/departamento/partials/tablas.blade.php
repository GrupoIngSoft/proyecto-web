					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Facultad Perteneciente</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($departamento as $departamento)
							<td>{{ $departamento->id }}</td>
							<td>{{ $departamento->nombre }}</td>
							<td>{{ $departamento->facultad->nombre }}</td>
							<td>{{ $departamento->descripcion }}</td>
							<td>
								<a href="{{ route('admin.departamento.edit', $departamento->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>