<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

    protected $table = 'escuelas';
    protected $fillable = ['codigo','nombre','descripcion'];

    public function escuela()
    {
        return $this->belongsTo('App\Models\Escuela');
    }
    public function estudiante()
    {
        return $this->hasMany('App\Models\Estudiante');
    }

}
