@extends('app')

@section('content')
@include('ecampus.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Docente</div>

				<div class="panel-body">
					<table class="table table-striped">
						{!! Form::model($docente, ['route'=>['ecampus.docente.update', $docente->id], 'method'=>'PUT']) !!}
						@include('ecampus.docente.partials.campos')
						  <button type="submit" class="btn btn-info">Actualizar Docente</button>
						{!! Form::close() !!}
				</div>
			</div>
			@include('ecampus.docente.partials.delete')
		</div>
	</div>
</div>
@endsection
