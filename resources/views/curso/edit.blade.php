@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Curso</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($curso, ['route'=>['curso.update', $curso->id], 'method'=>'PUT']) !!}
						@include('curso.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Curso</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('curso.partials.delete')
		</div>
	</div>
</div>
@endsection
