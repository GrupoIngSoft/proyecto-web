<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

    protected $table = 'docentes';
    protected $fillable = ['rut','nombres','apellidos'];

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }
    public function curso()
    {
        return $this->hasMany('App\Models\Curso');
    }

}
