 						  <div class="form-group">
						    {!! Form::label('nombre','Nombre de Departamento') !!}
						    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Introduzca Nombre de Departamento']) !!}
						  </div>
						<div class="form-group">
						{!! Form::label('facultad_id','Facultad a la que Pertenece') !!}
						  {!! Form::select('facultad_id', $facultad, null, array('class' => 'form-control')) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('descripcion','Descripción') !!}
						    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Introduzca una Descripción']) !!}
						  </div>