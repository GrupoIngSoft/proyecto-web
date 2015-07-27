<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

    protected $table = 'cursos';
    protected $fillable = ['asignatura_id', 'docente_id', 'semestre','anio', 'seccion'];

    public function docente()
    {
        return $this->belongsTo('App\Models\Docente');
    }
    public function asignatura()
    {
        return $this->belongsTo('App\Models\Asignatura');
    }
    public function horario()
    {
        return $this->hasMany('App\Models\Horario');
    }
    public function estudiante()
    {
	return $this->belongsToMany('App\Models\Estudiante','asignaturas_cursadas','curso_id','estudiante_id');
    }
}
