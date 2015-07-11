@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<tr>#</tr>
							<tr>Nombre</tr>
							<tr>Rut</tr>
							<tr>Acciones</tr>
						</tr>
						@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->nombre }}</td>
							<td>{{ $user->rut }}</td>
							<td>{{ $user->tipo }}</td>
							<td>
								<a> href=""Editar</a>
								<a> href=""Eliminar</a>
							</td>
						</tr>
						@endforeach
					</table>
					{!! $users->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
