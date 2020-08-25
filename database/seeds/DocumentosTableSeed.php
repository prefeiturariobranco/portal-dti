<?php

use Illuminate\Database\Seeder;
use App\Model\Documentos;

class DocumentosTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Documentos::create([
            'titulo' => 'Teste',
            'descricao' => 'Descrição de teste.',
            'valor' => 0.00,
            'data_inicio' => '1995-08-13',
            'data_fim' => '1995-08-13',
            'criado_por' => 1,
            'documentos_categorias_id' => 1
        ]);
    }
}
