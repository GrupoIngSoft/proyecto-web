					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Rut</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Departamento Perteneciente</th>
							<th>Acciones</th>
						</tr>
						@foreach($docente as $docente)
							<td>{{ $docente->id }}</td>
							<td>{{ $docente->rut }}</td>
							<td>{{ $docente->nombres }}</td>
							<td>{{ $docente->apellidos }}</td>
							<td>{{ $docente->departamento->nombre }}</td>
							<td>
								<a href="{{ route('admin.docente.edit', $docente->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>