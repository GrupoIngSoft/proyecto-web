@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Funcionario</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($funcionario, ['route'=>['ecampus.funcionario.update', $funcionario->id], 'method'=>'PUT']) !!}
						@include('ecampus.funcionario.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Funcionario</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.funcionario.partials.delete')
		</div>
	</div>
</div>
@endsection
