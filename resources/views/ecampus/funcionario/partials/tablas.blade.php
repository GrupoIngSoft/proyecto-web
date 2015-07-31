					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Rut</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Departamento Perteneciente</th>
							<th>Acciones</th>
						</tr>
						@foreach($funcionario as $funcionario)
							<td>{{ $funcionario->id }}</td>
							<td>{{ $funcionario->rut }}</td>
							<td>{{ $funcionario->nombres }}</td>
							<td>{{ $funcionario->apellidos }}</td>
							<td>{{ $funcionario->departamento->nombre }}</td>
							<td>
								<a href="{{ route('ecampus.funcionario.edit', $funcionario->id) }}">Editar</a>
							</td>
						</tr>
						@endforeach
					</table>