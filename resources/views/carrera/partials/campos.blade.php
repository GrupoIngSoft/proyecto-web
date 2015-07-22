 						  <div class="form-group">
						    {!! Form::label('nombre','Nombre de Carrera') !!}
						    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombre de Carrera']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('codigo','Codigo de Carrera') !!}
						    {!! Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Codigo de Carrera']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('escuela_id','Escuela a la que Pertenece') !!}
						  {!! Form::select('escuela_id', $escuela, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('descripcion','Descripción') !!}
						    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Introduzca una Descripción']) !!}
						  </div>