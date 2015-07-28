@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Funcionarios</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('funcionario.create') }}" role="button">
						Nuevo Funcionario
					</a>
				</p>
				<div class="panel-body">
					@include('funcionario.partials.tablas')
					
				</div>
				{!! $funcionario->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
