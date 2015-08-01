<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model {

    protected $table = 'salas';
    protected $fillable = ['campus_id', 'tipo_sala_id', 'nombre', 'capacidad', 'descripcion'];

    public function campus()
    {
        return $this->belongsTo('App\Models\Campus');
    }

    public function TipoSala()
    {
        return $this->belongsTo('App\Models\TipoSala');
    }

    public function Horario()
    {
        return $this->hasMany('App\Models\Horario');
    }

}
