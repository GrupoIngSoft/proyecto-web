@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Campus</div>
				<p>
					<a class="btn btn-info" href="{{ route('campus.create') }}" role="button">
						Nuevo Campus
					</a>
				</p>
				<div class="panel-body">
					@include('campus.partials.tablas')
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection