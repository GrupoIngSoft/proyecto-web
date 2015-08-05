@extends('app')

@section('content')
@include('docente.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Clases Asignadas</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				
				<div class="panel-body">
					@include('docente.clases.tablas')
					
				</div>
				{!! $horarios->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
