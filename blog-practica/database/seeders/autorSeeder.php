<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autor')->insert([
            'id' => 1,
            'nombre' => 'Patrick',
            'apellidos' => 'Rothfuss',
            'fechaNacimiento' => Carbon::create('1973', '06', '06'),
            'ciudadNatal' => 'Madison (Wisconsin)',
            'biografia' => utf8_encode('Es un escritor estadounidense de fantas�a y profesor adjunto de literatura y filolog�a inglesa en la Universidad de Wisconsin. Es el autor de la serie Cr�nica del asesino de reyes, que fue rechazada por varias editoriales antes de que el primer libro de la serie El nombre del viento fuese publicado en el a�o 2007. Obtuvo muy buenas cr�ticas y se convirti� en un �xito de ventas.')
        ]);
    }
}
