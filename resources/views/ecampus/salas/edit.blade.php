@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Sala</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($salas, ['route'=>['ecampus.salas.update', $salas->id], 'method'=>'PUT']) !!}
						@include('ecampus.salas.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Sala</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.salas.partials.delete')
		</div>
	</div>
</div>
@endsection
