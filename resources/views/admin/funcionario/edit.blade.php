@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Funcionario</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($funcionario, ['route'=>['admin.funcionario.update', $funcionario->id], 'method'=>'PUT']) !!}
						@include('admin.funcionario.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Funcionario</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.funcionario.partials.delete')
		</div>
	</div>
</div>
@endsection
