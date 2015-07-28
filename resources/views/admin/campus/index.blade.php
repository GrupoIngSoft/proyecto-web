@extends('app')

@section('content')
@include('admin.menu')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Campus</div>
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }} </p>
				@endif
				<p>
					<a class="btn btn-info" href="{{ route('admin.campus.create') }}" role="button">
						Nuevo Campus
					</a>
				</p>
				<div class="panel-body">
					@include('admin.campus.partials.tablas')
					
				</div>
				{!! $campus->render() !!}
			</div>
		</div>
	</div>

</div>

@endsection
