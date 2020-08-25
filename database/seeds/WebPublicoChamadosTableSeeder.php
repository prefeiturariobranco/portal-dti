<?php

use Illuminate\Database\Seeder;
use App\Model\Webpublico_Ciclos_Chamados;

class WebPublicoChamadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Webpublico_Ciclos_Chamados::create([
            'ch_recursos_humanos' => 15,
            'ch_tributario' => 88,
            'ch_administrativo' => 62,
            'ch_contabil' => 42,
            'ch_geral' => 0,
            'ch_transporte' => 0,
            'ch_previdenciario' => 0,
            'ch_infra' => 0,
            'ciclo' => '201908_02'
        ]);
    }
}
