<?php

namespace Database\Seeders;

use App\Model\Unidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidades::create([
            'nome_unidade' => 'Orçamentária',
            'ocultar' => 0
        ]);

        Unidades::create([
            'nome_unidade' => 'Compras',
            'ocultar' => 0
        ]);

        Unidades::create([
            'nome_unidade' => 'Licitações',
            'ocultar' => 0
        ]);

        Unidades::create([
            'nome_unidade' => 'Contratos',
            'ocultar' => 0
        ]);

        Unidades::create([
            'nome_unidade' => 'Materiais',
            'ocultar' => 0
        ]);

        Unidades::create([
            'nome_unidade' => 'Patrimônio',
            'ocultar' => 0
        ]);
    }
}
