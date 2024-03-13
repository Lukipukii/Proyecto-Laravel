<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory(100)->create()->each(function ($alumno) {
            $idiomas = $this->getIdiomas();
            foreach ($idiomas as $idioma) {
                $datos = new Idioma();
                $datos->idioma = $idioma;
                $datos->alumno_id = $alumno->id;
                $datos->save();
            }
        });
    }

    private function getIdiomas(): array
    {
        $idiomas = config("idiomas.idiomas");
        $idiomas_hablados = [];
        $numero_idiomas = rand(0, 4);

        if ($numero_idiomas == 0)
            return [];
        $posiciones_idiomas = array_rand($idiomas, $numero_idiomas);

        if (!is_array($posiciones_idiomas))
            $idiomas_hablados[] = $idiomas[$posiciones_idiomas];
        else
            foreach ($posiciones_idiomas as $pos)
                $idiomas_hablados[] = $idiomas[$pos];
        return $idiomas_hablados;
    }

}
