@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Horario</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($horarios, ['route'=>['ecampus.horario.update', $horarios->id], 'method'=>'PUT']) !!}
						@include('ecampus.horario.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Horario</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.horario.partials.delete')
		</div>
	</div>
</div>
@endsection
