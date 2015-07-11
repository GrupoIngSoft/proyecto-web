					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Rut Encargado</th>
							<th>Acciones</th>
						</tr>
						@foreach($campus as $campus)
						<tr>
							<td>{{ $campus->id }}</td>
							<td>{{ $campus->nombre }}</td>
							<td>{{ $campus->direccion }}</td>
							<td>{{ $campus->rut_encargado }}</td>
							<td>
								<a href="{{ route('campus.edit', $campus->id) }}">Editar</a>
								<a href="">Eliminar</a>
							</td>
						</tr>
						@endforeach
					</table>