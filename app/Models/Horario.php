<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model {

    protected $table = 'horarios';
    protected $fillable = ['fecha'];

    public function periodos()
    {
        return $this->belongsTo('App\Models\Periodo');
    }
    public function cursos()
    {
        return $this->belongsTo('App\Models\Curso');
    }
    public function salas()
    {
        return $this->belongsTo('App\Models\Sala');
    }

}
