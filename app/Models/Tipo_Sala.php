<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Sala extends Model {

    protected $table = 'tipos_salas';
    protected $fillable = ['nombre','descripcion'];

    public function sala()
    {
        return $this->hasMany('App\Models\Sala');
    }

}
