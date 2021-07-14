<?php

use Illuminate\Database\Seeder;
use App\Model\Icones_categorias;

class IconesCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Icones_categorias::create([
            'nome' => 'Eu Preciso?',
            'status' => 1,
            'ocultar' => 0,
        ]);

        Icones_categorias::create([
            'nome' => 'Utilidades',
            'status' => 1,
            'ocultar' => 0
        ]);

        Icones_categorias::create([
            'nome' => 'Portais',
            'status' => 1,
            'ocultar' => 0
        ]);

        Icones_categorias::create([
            'nome' => 'Serviços',
            'status' => 1,
            'ocultar' => 0
        ]);
    }
}
