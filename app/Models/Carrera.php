<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

    protected $table = 'escuelas';
    protected $fillable = ['codigo','nombre','descripcion'];

    public function escuelas()
    {
        return $this->belongsTo('App\Models\Escuela');
    }
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante');
    }

}
