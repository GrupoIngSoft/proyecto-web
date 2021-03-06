@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Tipo de Salas</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('admin.tiposala.create') }}" role="button">
						Nuevo Tipo de Sala
					</a>
				</p>
				<div class="panel-body">
					@include('admin.tiposala.partials.tablas')
					
				</div>
				{!! $tiposala->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
