<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            'titulo' => 'El nombre del viento',
            'fechaPublicacion' => Carbon::create('2007', '03', '27'),
            'sinopsis' => utf8_encode('En una posada en tierra de nadie, un hombre se dispone a relatar, por primera vez, la aut�ntica historia de su vida. Una historia que �nicamente �l conoce y que ha quedado diluida tras los rumores, las conjeturas y los cuentos de taberna que le han convertido en un personaje legendario a quien todos daban ya por muerto: Kvothe... m�sico, mendigo, ladr�n, estudiante, mago, h�roe y asesino. Ahora va a revelar la verdad sobre s� mismo. Y para ello debe empezar por el principio: su infancia en una troupe de artistas itinerantes, los a�os malviviendo como un ladronzuelo en las calles de una gran ciudad y su llegada a una universidad donde esperaba encontrar todas las respuestas que hab�a estado buscando.')
        ]);
        
        DB::table('libros')->insert([
            'titulo' => 'El temor de un hombre sabio',
            'fechaPublicacion' => Carbon::create('2011', '03', '01'),
            'sinopsis' => utf8_encode('El hombre hab�a desaparecido. El mito no. M�sico, mendigo, ladr�n, estudiante, mago, trotamundos, h�roe y asesino, Kvothe hab�a borrado su rastro. Y ni siquiera ahora que le han encontrado, ni siquiera ahora que las tinieblas invaden los rincones del mundo, est� dispuesto a regresar. Pero su historia prosigue, la aventura contin�a, y Kvothe seguir� cont�ndola para revelar la verdad tras la leyenda.')
        ]);
        
        DB::table('libros')->insert([
            'titulo' => utf8_encode('La m�sica del silencio'),
            'fechaPublicacion' => Carbon::create('2014', '01', '11'),
            'sinopsis' => utf8_encode('La Universidad, el basti�n del conocimiento, atrae a las mentes m�s brillantes para aprender ciencias como la artificer�a y la alquimia. Pero bajo esos edificios y sus concurridas aulas existe un mundo en penumbra. En ese laberinto de t�neles antiguos, de salas y habitaciones abandonadas, de escaleras serpenteantes y pasillos semiderruidos vive Auri, otrora alumna de la Universidad. Ahora cuida de la Subrealidad, de la que ha aprendido que hay misterios que no conviene remover. Ya no se deja enga�ar por la l�gica en la que tanto conf�an en lo alto: ella sabe reconocer los sutiles peligros y los nombres olvidados que se ocultan bajo la superficie de las cosas.')
        ]);
        
        DB::table('libros')->insert([
            'titulo' => utf8_encode('El �rbol del rel�mpago'),
            'fechaPublicacion' => Carbon::create('2015', '03', '07'),
            'sinopsis' => utf8_encode('The Lightning Tree transcurre durante un d�a completo en Nowh� Newarre, el pueblo donde el legendario Kvothe se oculta con el nombre cambiado y una posada como tapadera. Solo que en esta ocasi�n a quien vamos a seguir es a su aprendiz Bast, que nos mostrar� su red de contactos infantil, su picaresca y la forma en que se deja percibir por los habitantes normales del pueblo� adem�s de bastante informaci�n jugosa sobre el trasfondo del mundo de Rothfuss.')
        ]);
        
        DB::table('libros')->insert([
            'titulo' => utf8_encode('Las aventuras de la princesa y el se�or Fu'),
            'fechaPublicacion' => Carbon::create('2012', '10', '04'),
            'sinopsis' => utf8_encode('Lo parece. Tiene ilustraciones. Tiene un t�tulo almibarado. Los protagonistas son una ni�a y su osito de peluche. Pero todo eso no es m�s que una fachada. En realidad, este es un cuento para adultos que tengan un sentido del humor un tanto siniestro y sepan apreciar los cuentos de hadas de los de antes.')
        ]);
        
        DB::table('libros')->insert([
            'titulo' => 'El camino a Levinshir',
            'fechaPublicacion' => Carbon::create('2008', '07', '01'),
            'sinopsis' => utf8_encode('Extracto de un cap�tulo de El temor de un hombre sabio')
        ]);
    }
}
