<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {

    protected $table = 'funcionarios';
    protected $fillable = ['rut','nombres','apellidos'];

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }

}
