@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Bienvenido Administrador</div>

				<div class="panel-body">
					<div>
						<p>Este es el area de Administración del Sistema</p> 
 						<p>Aquí podrá realizar la administración general del sistema, puede crear/modificar/eliminar cualquier sección del sistema. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection