						<div class="form-group">
						{!! Form::label('campus_id','Campus al que Corresponde') !!}
						  {!! Form::select('campus_id', $campus, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						{!! Form::label('tipo_sala_id','Tipo de Sala') !!}
						  {!! Form::select('tipo_sala_id', $tiposala, null, array('class' => 'form-control')) !!}
						  </div>
						   <div class="form-group">
						    {!! Form::label('nombre','Nombre de la Sala') !!}
						    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre de la Sala']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('capacidad','Capacidad de la Sala') !!}
						    {!! Form::text('capacidad', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Capacidad de la Sala']) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('descripcion','Descripcion') !!}
						    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Descripción']) !!}
						  </div>