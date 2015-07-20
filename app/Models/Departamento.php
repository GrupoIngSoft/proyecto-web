<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

    protected $table = 'departamentos';
    protected $fillable = ['nombre', 'facultad_id', 'descripcion'];

    public function facultad()
    {
        return $this->belongsTo('App\Models\Facultad');
    }
    public function docente()
    {
        return $this->hasMany('App\Models\Docente');
    }
    public function escuela()
    {
        return $this->hasMany('App\Models\Escuela');
    }
    public function funcionario()
    {
        return $this->hasMany('App\Models\Funcionario');
    }
    public function asignatura()
    {
        return $this->hasMany('App\Models\Asignatura');
    }
}