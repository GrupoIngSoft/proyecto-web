@extends('app')

@section('content')
@include('menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Departamento</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($departamento, ['route'=>['departamento.update', $departamento->id], 'method'=>'PUT']) !!}
						@include('departamento.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Departamento</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('departamento.partials.delete')
		</div>
	</div>
</div>
@endsection
