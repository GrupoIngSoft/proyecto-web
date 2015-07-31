<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model {

    protected $table = 'horarios';
    protected $fillable = ['fecha', 'sala_id', 'periodo_id', 'curso_id'];

    public function periodo()
    {
        return $this->belongsTo('App\Models\Periodo');
    }
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }
    public function sala()
    {
        return $this->belongsTo('App\Models\Sala');
    }

}
