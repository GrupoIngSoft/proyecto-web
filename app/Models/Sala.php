<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model {

    protected $table = 'salas';
    protected $fillable = ['nombre','descripcion'];

    public function tipos_salas()
    {
        return $this->belongsTo('Tipo_Sala');
    }
    public function horarios()
    {
        return $this->hasMany('Horario');
    }

}
