<?php namespace App\Models;

class Usuario extends \UTEM\Dirdoc\Auth\Models\DirdocWSUser {

	protected $table = 'usuarios';
    protected $fillable = ['rut', 'nombres', 'apellidos','email'];
    public $timestamps = true;
    public function roles()
    {
      return $this->belongsToMany('App\Models\Rol', 'roles_usuarios', 'usuario_rut', 'rol_id');
    }

}
