<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

    protected $table = 'asignaturas';
    protected $fillable = ['departamento_id', 'codigo','nombre', 'descripcion'];

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }
    public function curso()
    {
        return $this->hasMany('App\Models\Curso');
    }
}
