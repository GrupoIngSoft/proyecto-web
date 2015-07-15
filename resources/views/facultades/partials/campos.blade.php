 						  <div class="form-group">
						    {!! Form::label('nombre','Nombre de Facultad') !!}
						    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombre de Facultad']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('campus','Campus al que Pertenece') !!}
						  {!! Form::select('campus', $campus, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('descripcion','Descripción') !!}
						    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Introduzca una Descripción']) !!}
						  </div>