<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'titulo' => 'Mi primera nota',
            'contenido' => 'Contenido de prueba',
            
        ]);

        DB::table('notas')->insert([
            'titulo' => 'Instalación de laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);
    }
}
