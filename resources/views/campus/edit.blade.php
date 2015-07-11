@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Campus</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($campus, ['route'=>['campus.update', $campus->id], 'method'=>'PUT']) !!}
						@include('campus.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Campus</button>
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
