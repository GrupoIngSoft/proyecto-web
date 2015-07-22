 						   <div class="form-group">
						    {!! Form::label('rut','Rut del Docente') !!}
						    {!! Form::text('rut', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Rut del Docente']) !!}
						  </div>
 						  <div class="form-group">
						    {!! Form::label('nombres','Nombres del Docente') !!}
						    {!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombres del Docente']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('apellidos','Apellidos del Docente') !!}
						    {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Apellidos del Docente']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('departamento_id','Departamento al que Pertenece') !!}
						  {!! Form::select('departamento_id', $departamento, null, array('class' => 'form-control')) !!}
						  </div>