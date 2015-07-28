@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Asignatura</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($asignatura, ['route'=>['admin.asignatura.update', $asignatura->id], 'method'=>'PUT']) !!}
						@include('admin.asignatura.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Asignatura</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.asignatura.partials.delete')
		</div>
	</div>
</div>
@endsection
