<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model {

    protected $table = 'escuelas';
    protected $fillable = ['nombre'];

    public function departamentos()
    {
        return $this->belongsTo('Departamento');
    }
    public function carreras()
    {
        return $this->hasMany('Carrera');
    }

}
