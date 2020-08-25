<?php

use Illuminate\Database\Seeder;
use App\Model\Documentos_arquivos;

class DocumentosArquivosTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Documentos_arquivos::create([
            'caminho'=> 'upload.txt',
            'documentos_id' => 1
        ]);
    }
}
