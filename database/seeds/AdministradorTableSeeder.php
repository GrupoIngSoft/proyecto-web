<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class AdministradorTableSeeder extends Seeder {
	
	public function run()
	{
		 public function run(){
		 	$id= \DB::table('roles')->insert(array(
                  'nombre'       =>'Diego Esparza Perez',
                  'Descripcion'  =>'Administrador de la Pagina',
                  'type' => 'ADMINISTRADOR'
		 		));
		 }
		 //\DB::table('roles_usuarios')->insert(arrary(
		 	//));
	}
}