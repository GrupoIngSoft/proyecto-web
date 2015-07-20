<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

    protected $table = 'cursos';
    protected $fillable = ['semestre','anio'];

    public function docente()
    {
        return $this->belongsTo('App\Models\Docente');
    }
    public function asignatura()
    {
        return $this->belongsTo('App\Models\Asignatura');
    }
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario');
    }
    public function estudiante()
    {
	return $this->belongsToMany('App\Models\Estudiante','asignaturas_cursadas','curso_id','estudiante_id');
    }
}
