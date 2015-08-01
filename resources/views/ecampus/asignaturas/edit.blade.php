@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Asignatura</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($asignaturas, ['route'=>['ecampus.asignaturas.update', $asignaturas->id], 'method'=>'PUT']) !!}
						@include('ecampus.asignaturas.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Asignatura</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.asignaturas.partials.delete')
		</div>
	</div>
</div>
@endsection
