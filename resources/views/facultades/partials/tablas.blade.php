					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Campus Perteneciente</th>
							<th>Acciones</th>
						</tr>
						@foreach($facultad as $facultad)
							<td>{{ $facultad->id }}</td>
							<td>{{ $facultad->nombre }}</td>
							<td></td>
							<td>
								<a href="{{ route('facultades.edit', $facultad->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>