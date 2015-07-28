					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Tipo de Usuario</th>
							<th>Rut</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($rolusuario as $rolusuario)
							<td>{{ $rolusuario->id }}</td>
							<td>{{ $rolusuario->rol->nombre }}</td>
							<td>{{ $rolusuario->rut }}</td>
							<td>{{ $rolusuario->rol->descripcion }}</td>
							<td>
								<a href="{{ route('rolusuario.edit', $rolusuario->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>