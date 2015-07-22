@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Asignaturas</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('asignatura.create') }}" role="button">
						Nueva Asignatura
					</a>
				</p>
				<div class="panel-body">
					@include('asignatura.partials.tablas')
					
				</div>
			</div>
		</div>
	</div>

</div>

@endsection
