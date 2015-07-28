@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Departamentos</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('departamento.create') }}" role="button">
						Nuevo Departamento
					</a>
				</p>
				<div class="panel-body">
					@include('departamento.partials.tablas')
					
				</div>
				{!! $departamento->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
