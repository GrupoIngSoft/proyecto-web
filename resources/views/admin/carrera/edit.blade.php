@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Carrera</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($carrera, ['route'=>['admin.carrera.update', $carrera->id], 'method'=>'PUT']) !!}
						@include('admin.carrera.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Asignatura</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.carrera.partials.delete')
		</div>
	</div>
</div>
@endsection
