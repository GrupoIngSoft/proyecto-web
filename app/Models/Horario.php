<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model {

    protected $table = 'horarios';
    protected $fillable = ['fecha', 'sala_id', 'periodo_id', 'curso_id'];

    public function Periodo()
    {
        return $this->belongsTo('App\Models\Periodo');
    }
    public function Curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }
    public function Sala()
    {
        return $this->belongsTo('App\Models\Sala');
    }

}
