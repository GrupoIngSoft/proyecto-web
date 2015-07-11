<?php

use Illuminate\Database\Seeder;
use App\Models\Facultad;

class FacultadesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('facultades')->delete();
        $nombres = ['Facultad Administracion y Economia', 'Facultad Ciencias de la Construccion y Ordenamiento Territorial', 'Facultad de Ciencias Naturales, Matematica y del Medio Ambiente','Facultad de Humanidades y Tecnologia de la Comunicacion Social','Facultad de Ingenieria'];
        
        foreach($nombres as $nombre)
        {
            $campus = Facultad::create(['nombre' => $nombre]);
        }
    }

}