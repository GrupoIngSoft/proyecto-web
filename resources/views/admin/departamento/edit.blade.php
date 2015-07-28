@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Departamento</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($departamento, ['route'=>['admin.departamento.update', $departamento->id], 'method'=>'PUT']) !!}
						@include('admin.departamento.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Departamento</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.departamento.partials.delete')
		</div>
	</div>
</div>
@endsection
