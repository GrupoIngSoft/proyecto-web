					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Latitud</th>
							<th>Longitud</th>
							<th>Descripción</th>
							<th>Rut Encargado</th>
							<th>Acciones</th>
						</tr>
						@foreach($campus as $campus)
							<td>{{ $campus->id }}</td>
							<td>{{ $campus->nombre }}</td>
							<td>{{ $campus->direccion }}</td>
							<td>{{ $campus->latitud }}</td>
							<td>{{ $campus->longitud }}</td>
							<td>{{ $campus->descripcion }}</td>
							<td>{{ $campus->rut_encargado }}</td>
							<td>
								<a href="{{ route('admin.campus.edit', $campus->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>