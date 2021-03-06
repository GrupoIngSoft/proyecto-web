@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Estudiante</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($estudiante, ['route'=>['admin.estudiante.update', $estudiante->id], 'method'=>'PUT']) !!}
						@include('admin.estudiante.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Estudiante</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.estudiante.partials.delete')
		</div>
	</div>
</div>
@endsection
