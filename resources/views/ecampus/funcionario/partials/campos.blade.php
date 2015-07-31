 						   <div class="form-group">
						    {!! Form::label('rut','Rut del Funcionario') !!}
						    {!! Form::text('rut', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Rut del Funcionario']) !!}
						  </div>
 						  <div class="form-group">
						    {!! Form::label('nombres','Nombres del Funcionario') !!}
						    {!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombres del Funcionario']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('apellidos','Apellidos del Funcionario') !!}
						    {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Apellidos del Funcionario']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('departamento_id','Departamento al que Pertenece') !!}
						  {!! Form::select('departamento_id', $departamento, null, array('class' => 'form-control')) !!}
						  </div>