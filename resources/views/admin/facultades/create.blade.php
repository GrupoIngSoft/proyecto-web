@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva Facultad</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::open(['route'=>'admin.facultades.store', 'method'=>'POST']) !!}
						@include('admin.facultades.partials.campos')
						  <button type="submit" class="btn btn-info">Crear</button>
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
