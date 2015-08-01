@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Bienvenido Encargado de Campus</div>

				<div class="panel-body">
 					<div>
 						<p>Este es el area de Encargado De Campus.</p> 
 						<p>Aquí podrá asignar salas a su correspondiente Campus, crear Cursos Horarios, etc.</p>
 					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection