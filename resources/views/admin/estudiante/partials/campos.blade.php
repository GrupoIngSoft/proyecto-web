 						   <div class="form-group">
						    {!! Form::label('rut','Rut del Estudiante') !!}
						    {!! Form::text('rut', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Rut del Estudiante']) !!}
						  </div>
 						  <div class="form-group">
						    {!! Form::label('nombres','Nombres del Estudiante') !!}
						    {!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombres del Estudiante']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('apellidos','Apellidos del Estudiante') !!}
						    {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Apellidos del Estudiante']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('email','Email del Estudiante') !!}
						    {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Email del Estudiante']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('carrera_id','Carrera a la que Pertenece') !!}
						  {!! Form::select('carrera_id', $carrera, null, array('class' => 'form-control')) !!}
						  </div>