<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Alumnos;
class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        \App\Models\Alumnos::factory()->count(30)->create(); 
        
        //
        //DB::select(DB::raw("SET SESSION time_zone = 'Europe/Paris'"));
        // DB::table('alumnos')->insert([
        
        //     'nombre' => 'Shirley',
        //     'apellidopa' => 'Espino',
        //     'apellidoma' => 'Cardenas',
        //     'dni' => '12345678',
        //     'codigomat' => 2021123456,
        //     'fechareg' => DB::raw('CURRENT_TIMESTAMP'),
        //     ]);

    }
}
