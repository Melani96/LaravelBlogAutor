<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class entradasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas')->insert([
            'entrada' => utf8_encode('Ya están disponibles todos mis libros'),
            'fechaCreado' => Carbon::now()->format('Y-m-d')
        ]);
        
        DB::table('entradas')->insert([
            'entrada' => utf8_encode('Se viene nuevo libro titulado: Las puertas de piedra'),
            'fechaCreado' => Carbon::now()->format('Y-m-d')
        ]);
    }
}
