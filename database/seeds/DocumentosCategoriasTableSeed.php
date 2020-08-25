<?php

use Illuminate\Database\Seeder;
use App\Model\Documentos_categorias;
class DocumentosCategoriasTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Documentos_categorias::create([
            'nome' => 'Contrato',
        ]);
        Documentos_categorias::create([
            'nome' => 'PPA',
        ]);
    }
}
