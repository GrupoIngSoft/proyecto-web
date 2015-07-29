@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Curso</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($curso, ['route'=>['ecampus.cursos.update', $curso->id], 'method'=>'PUT']) !!}
						@include('ecampus.cursos.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Curso</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.cursos.partials.delete')
		</div>
	</div>
</div>
@endsection
