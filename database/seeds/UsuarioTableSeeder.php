++<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuarioTableSeeder extends Seeder {

    public function run()
	{
		
		for($i=0; $i<30; $i++)
		{
          \DB::table('usuarios')-> insert (array(
             'rut'       =>'182782890',
             'email'  =>'mapakn69@gmail.com',
             'nombres'         =>'Diego Ignacio',
             'apellidos'         =>'Esparza Perez',
             	));		
		 
		}
	}

}