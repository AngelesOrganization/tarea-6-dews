<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestBorrarLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('autores')->insert([
            'nombre' => 'John',
            'apellidos' => 'Ronald Reuel Tolkien',
            'nacionalidad' => 'Británica',
        ]);

        DB::table('libros')->insert([
            'titulo' => 'La Comunidad del Anillo',
            'f_publicacion' => '29/07/1954',
            'id_autor' => '1',
        ]);
    }
}