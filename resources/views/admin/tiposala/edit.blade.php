@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Tipo de Sala</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($tiposala, ['route'=>['admin.tiposala.update', $tiposala->id], 'method'=>'PUT']) !!}
						@include('admin.tiposala.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Tipo de Sala</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.tiposala.partials.delete')
		</div>
	</div>
</div>
@endsection
