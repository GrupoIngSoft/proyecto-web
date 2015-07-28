@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cursos</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('admin.curso.create') }}" role="button">
						Nuevo Curso
					</a>
				</p>
				<div class="panel-body">
					@include('admin.curso.partials.tablas')
					
				</div>
				{!! $curso->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
