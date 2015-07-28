@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Sala</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($sala, ['route'=>['admin.sala.update', $sala->id], 'method'=>'PUT']) !!}
						@include('admin.sala.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Sala</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.sala.partials.delete')
		</div>
	</div>
</div>
@endsection
