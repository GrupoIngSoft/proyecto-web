<?php

use Illuminate\Database\Seeder;
use App\Models\Campus;

class CampusTableSeeder extends Seeder {

    public function run()
    {
        DB::table('campus')->delete();
        $nombres = ['Macul', 'FAE', 'Centro'];
        
        foreach($nombres as $nombre)
        {
            $campus = Campus::create(['nombre' => $nombre]);
        }
    }

}