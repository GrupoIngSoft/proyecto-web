<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model {

    protected $table = 'campus'; 
    protected $fillable = ['nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado'];

    public function facultad()
    {
        return $this->hasMany('App\Models\Facultad');
    }

    public function sala()
    {
        return $this->hasMany('App\Models\Sala');
    }
}
