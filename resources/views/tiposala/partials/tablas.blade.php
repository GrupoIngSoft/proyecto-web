					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Acciones</th>
						</tr>
						@foreach($tiposala as $tiposala)
							<td>{{ $tiposala->id }}</td>
							<td>{{ $tiposala->nombre }}</td>
							<td>{{ $tiposala->descripcion }}</td>
							<td>
								<a href="{{ route('tiposala.edit', $tiposala->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>