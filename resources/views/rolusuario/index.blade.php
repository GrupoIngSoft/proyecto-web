@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('rolusuario.create') }}" role="button">
						Nuevo Usuario
					</a>
				</p>
				<div class="panel-body">
					@include('rolusuario.partials.tablas')
					
				</div>
				{!! $rolusuario->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
