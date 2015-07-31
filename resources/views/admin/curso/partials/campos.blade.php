						<div class="form-group">
						{!! Form::label('asignatura_id','Asignatura Correspondiente') !!}
						  {!! Form::select('asignatura_id', $asignatura, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('docente_id','Docente Encargado') !!}
						  {!! Form::select('docente_id', $docente, null, array('class' => 'form-control')) !!}
						  </div>
						   <div class="form-group">
						    {!! Form::label('semestre','Semestre al que Corresponde') !!}
						    {!! Form::text('semestre', null, ['class'=>'form-control', 'placeholder'=>'Semestre al que Corresponde']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('anio','Año del Curso') !!}
						    {!! Form::text('anio', null, ['class'=>'form-control', 'placeholder'=>'Seleccione Año del Curso']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('seccion','Sección a la que Corresponde') !!}
						    {!! Form::text('seccion', null, ['class'=>'form-control', 'placeholder'=>'Seleccione la Sección del Curso']) !!}
						  </div>