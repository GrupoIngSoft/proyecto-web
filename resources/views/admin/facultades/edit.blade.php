@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Facultad</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($facultad, ['route'=>['admin.facultades.update', $facultad->id], 'method'=>'PUT']) !!}
						@include('admin.facultades.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Facultad</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.facultades.partials.delete')
		</div>
	</div>
</div>
@endsection
