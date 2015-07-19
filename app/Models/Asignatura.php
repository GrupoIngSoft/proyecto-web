<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

    protected $table = 'asignaturas';
    protected $fillable = ['codigo','nombre', 'descripcion'];

    public function departamentos()
    {
        return $this->belongsTo('App\Models\Departamento');
    }
    public function departamentos()
    {
        return $this->hasMany('App\Models\Curso');
    }
}
