@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Campus</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($campus, ['route'=>['admin.campus.update', $campus->id], 'method'=>'PUT']) !!}
						@include('admin.campus.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Campus</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('admin.campus.partials.delete')
		</div>
	</div>
</div>
@endsection
