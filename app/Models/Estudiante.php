<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

    protected $table = 'estudiantes';
    protected $fillable = ['rut','nombres','apellidos','email'];

    public function carrera()
    {
        return $this->belongsTo('App\Models\Carrera');
    }
    public function curso()
    {
	return $this->belongsToMany('App\Models\Curso','asignaturas_cursadas','estudiante_id','curso_id');
    }

}
