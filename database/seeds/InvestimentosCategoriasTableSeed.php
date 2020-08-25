<?php

use Illuminate\Database\Seeder;
use App\Model\Investimentos_categorias;

class InvestimentosCategoriasTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Investimentos_categorias::create([
            'nome' => 'Sistemas',
        ]);

        Investimentos_categorias::create([
            'nome' => 'Cursos',
        ]);

        Investimentos_categorias::create([
            'nome' => 'PMTA',
        ]);

        Investimentos_categorias::create([
            'nome' => 'Consultoria',
        ]);

        Investimentos_categorias::create([
            'nome' => 'Infraestrutura',
        ]);
    }
}
