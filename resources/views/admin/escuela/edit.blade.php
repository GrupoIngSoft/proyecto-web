@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Escuela</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($escuela, ['route'=>['admin.escuela.update', $escuela->id], 'method'=>'PUT']) !!}
						@include('admin.escuela.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Escuela</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.escuela.partials.delete')
		</div>
	</div>
</div>
@endsection
