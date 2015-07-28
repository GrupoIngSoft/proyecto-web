@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Periodo</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($periodo, ['route'=>['admin.periodo.update', $periodo->id], 'method'=>'PUT']) !!}
						@include('admin.periodo.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Periodo</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.periodo.partials.delete')
		</div>
	</div>
</div>
@endsection
