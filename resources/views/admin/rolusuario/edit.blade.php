@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Usuario</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($rolusuario, ['route'=>['admin.rolusuario.update', $rolusuario->id], 'method'=>'PUT']) !!}
						@include('admin.rolusuario.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Usuario</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.rolusuario.partials.delete')
		</div>
	</div>
</div>
@endsection
