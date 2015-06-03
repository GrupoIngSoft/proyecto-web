<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

    protected $table = 'departamentos';
    protected $fillable = ['nombre'];

    public function facultades()
    {
        return $this->belongsTo('Facultad');
    }
    public function docentes()
    {
        return $this->hasMany('Docente');
    }
    public function escuelas()
    {
        return $this->hasMany('Escuela');
    }
    public function funcionarios()
    {
        return $this->hasMany('Funcionario');
    }
    public function asignaturas()
    {
        return $this->hasMany('Asignatura');
    }
}
