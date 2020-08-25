<?php

use Illuminate\Database\Seeder;
use App\Model\Mapas_Categorias;

class MapasCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mapas_Categorias::create([
            'nome' => 'Unidades Anel(10G)'
        ]);

        Mapas_Categorias::create([
            'nome' => 'Unidades Anel(1G)'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Unidade Barramento 10G'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Unidade Barramento 1G'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Cabeamento Óptico - Caixas Emenda'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Cabeamento Óptico - Cabos Opticos'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Internet Social'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Erbs'
        ]);


        Mapas_Categorias::create([
            'nome' => 'Malha de Fibra'
        ]);

    }
}
