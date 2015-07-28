<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model {

    protected $table = 'roles_usuarios';
    protected $fillable = ['rut'];

    public function rol()
    {
        return $this->belongsTo('App\Models\Rol');
    }

}
