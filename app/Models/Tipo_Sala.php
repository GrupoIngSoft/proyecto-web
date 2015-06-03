<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Sala extends Model {

    protected $table = 'tipos_salas';
    protected $fillable = ['nombre'];

    public function salas()
    {
        return $this->hasMany('Sala');
    }

}
