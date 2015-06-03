<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model {

    protected $table = 'horarios';

    public function periodos()
    {
        return $this->belongsTo('Periodo');
    }
    public function cursos()
    {
        return $this->belongsTo('Curso');
    }
    public function salas()
    {
        return $this->belongsTo('Sala');
    }

}
