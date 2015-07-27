<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model {

    protected $table = 'periodos';
    protected $fillable = ['bloque','inicio','fin'];

    public function horario()
    {
        return $this->hasMany('App\Models\Horario');
    }

}
