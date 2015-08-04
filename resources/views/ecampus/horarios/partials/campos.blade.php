						 <div class="form-group">
						    {!! Form::label('fecha','Fecha') !!}
						    {!! Form::text('fecha', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Fecha con Formato dd-mm-aaaa']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('sala_id','Sala donde se impartirá el Curso') !!}
						  {!! Form::select('sala_id', $sala, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('periodo_id','Bloque') !!}
						  {!! Form::select('periodo_id', $periodo, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						
						  <div class="form-group">
						{!! Form::label('curso_id','Semestre en que se Imparte') !!}
						  {!! Form::select('curso_id', $curso, null, array('class' => 'form-control')) !!}
						  </div>
						