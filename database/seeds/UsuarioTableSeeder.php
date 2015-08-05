++<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuarioTableSeeder extends Seeder {

    public function run()
	{
		$faker= Faker::create();
		
		for($i=0; $i<30; $i++)
		{
          \DB::table('roles')-> insert (array(
             'nombre'       =>$faker->name,
             'descripcion'  =>$faker->text,
             'type'         =>'usuarios',
             	));		
		 \DB::table('roles_usuarios')->insert(array(
                'rol_id'      =>$id, 
                'rut'         => $faker->number,
                'descripcion' => $faker->text,
                ));
		}
	}

}