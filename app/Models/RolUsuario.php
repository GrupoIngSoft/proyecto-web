<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model {

    protected $table = 'roles_usuarios';
    protected $fillable = ['rut', 'rol_id'];

    public function usuario()
	{
		return $this->belongsTo('App\Models\Usuario','usuario_rut');
	}

    public function rol()
    {
        return $this->belongsTo('App\Models\Rol','rol_id','id');
    }

}
