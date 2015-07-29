@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Asignaturas</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('ecampus.asignaturas.create') }}" role="button">
						Nueva Asignatura
					</a>
				</p>
				<div class="panel-body">
					@include('ecampus.asignaturas.partials.tablas')
					
				</div>
				{!! $asignaturas->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
