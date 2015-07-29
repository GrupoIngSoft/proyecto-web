@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Estudiante</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($estudiantes, ['route'=>['ecampus.estudiantes.update', $estudiantes->id], 'method'=>'PUT']) !!}
						@include('ecampus.estudiantes.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Estudiante</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.estudiantes.partials.delete')
		</div>
	</div>
</div>
@endsection
