						 <div class="form-group">
						    {!! Form::label('fecha','Fecha') !!}
						    {!! Form::text('fecha', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Fecha']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('sala_id','Sala donde se impartirá el Curso') !!}
						  {!! Form::select('sala_id', $salas, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('periodo_id','Bloque') !!}
						  {!! Form::select('periodo_id', $periodo, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('periodo_id','Inicio') !!}
						  {!! Form::select('periodo_id', $periodo, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('periodo_id','Fin') !!}
						  {!! Form::select('periodo_id', $periodo, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('cursos_id','Nombre Asignatura') !!}
						  {!! Form::select('cursos_id', $cursos, $asignaturas, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('cursos_id','Codigo Asignatura') !!}
						  {!! Form::select('cursos_id', $cursos, $asignaturas, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('cursos_id','Semestre Asignatura') !!}
						  {!! Form::select('cursos_id', $cursos, $asignaturas, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('cursos_id','Año Asignatura') !!}
						  {!! Form::select('cursos_id', $cursos, $asignaturas, array('class' => 'form-control')) !!}
						  </div>