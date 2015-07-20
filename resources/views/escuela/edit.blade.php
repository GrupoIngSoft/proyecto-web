@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Escuela</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($escuela, ['route'=>['escuela.update', $escuela->id], 'method'=>'PUT']) !!}
						@include('escuela.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Escuela</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('escuela.partials.delete')
		</div>
	</div>
</div>
@endsection
