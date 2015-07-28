 						  <div class="form-group">
						{!! Form::label('rol_id','Tipo de Usuario') !!}
						  {!! Form::select('rol_id', $rol, null, array('class' => 'form-control')) !!}
						  </div>
 						  <div class="form-group">
						    {!! Form::label('rut','Rut del Usuario') !!}
						    {!! Form::text('rut', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Rut del Usuario']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('descripcion','Descripcion') !!}
						    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Descripción']) !!}
						  </div>