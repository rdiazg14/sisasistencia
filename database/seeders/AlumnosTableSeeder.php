<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        //
        //DB::select(DB::raw("SET SESSION time_zone = 'Europe/Paris'"));
        DB::table('alumnos')->insert([
        
            'nombre' => 'Shirley',
            'apellidopa' => 'Espino',
            'apellidoma' => 'Cardenas',
            'dni' => '46345678',
            'codigomat' => 20214269,
            'fechareg' => DB::raw('CURRENT_TIMESTAMP - INTERVAL 5 HOUR'),
            ]);

    }
}
