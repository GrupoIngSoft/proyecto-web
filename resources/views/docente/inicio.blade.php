@extends('app')

@section('content')
@include('docente.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Bienvenido Docente</div>

				<div class="panel-body">
 					<div>
 						<p>Este es el area de Docente.</p> 
 						<p>Aquí podrá consultar por los horarios en que dicta cátedras/laboratorios, en que periodo las dicte y en cual Campus.</p>
						<p>Navegue por el menu lateral izquierdo para mostrar cualquiera de las secciones.</p>				
 					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection