<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestConsultarLibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autores')->insert([
            'nombre' => 'Isaac',
            'apellidos' => 'Asimov',
            'nacionalidad' => 'Rusia',
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Un guijarro en el cielo',
            'f_publicacion' => '19/01/1950',
            'id_autor' => '1',
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Fundación',
            'f_publicacion' => '01/06/1951',
            'id_autor' => '1',
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Yo, robot',
            'f_publicacion' => '02/12/1950',
            'id_autor' => '1',
        ]);
    }
}
