<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

    protected $table = 'asignaturas';
    protected $fillable = ['codigo','nombre'];

    public function departamentos()
    {
        return $this->belongsTo('Departamento');
    }
    public function departamentos()
    {
        return $this->hasMany('Curso');
    }
}
