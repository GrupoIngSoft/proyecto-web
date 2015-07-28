 						  <div class="form-group">
						    {!! Form::label('nombre','Nombre de Asignatura') !!}
						    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombre de Asignatura']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('codigo','Codigo de Asignatura') !!}
						    {!! Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Codigo de Asignatura']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('departamento_id','Departamento al que Pertenece') !!}
						  {!! Form::select('departamento_id', $departamento, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('descripcion','Descripción') !!}
						    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Introduzca una Descripción']) !!}
						  </div>