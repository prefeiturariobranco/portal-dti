<?php

use Illuminate\Database\Seeder;
use App\Model\Mapas;

class MapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mapas::create([
            'lat' => -9.9637070,
            'lng' => -67.8144310,
            'titulo' => 'Projuri',
            'descricao' => NULL,
            'mapas_categorias_id' => 1
        ]);

        Mapas::create([
            'lat' => -9.9629640,
            'lng' => -67.8155340,
            'titulo' => 'SMDGU',
            'descricao' => NULL,
            'mapas_categorias_id' => 1
        ]);

        Mapas::create([
            'lat' => -9.9631450,
            'lng' => -67.8077590,
            'titulo' => 'SEMCAS',
            'descricao' => NULL,
            'mapas_categorias_id' => 1
        ]);

        Mapas::create([
            'lat' => -9.9701160,
            'lng' => -67.8029130,
            'titulo' => 'SEOP',
            'descricao' => NULL,
            'mapas_categorias_id' => 1
        ]);

        Mapas::create([
            'lat' => -9.9641900,
            'lng' => -67.8081410,
            'titulo' => 'ALMOX SEMCAS',
            'descricao' => NULL,
            'mapas_categorias_id' => 1
        ]);

        Mapas::create([
        'lat' => -9.9668290,
            'lng' => -67.8176290,
            'titulo' => 'SEME NOVA',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9598910,
            'lng' => -67.8116840,
            'titulo' => 'SEME',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9699740,
            'lng' => -67.8029740,
            'titulo' => 'CPL',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9734850,
            'lng' => -9.9734850,
            'titulo' => 'TERM URBANO',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9726030,
            'lng' => -67.8066560,
            'titulo' => 'OCA',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9608450,
            'lng' => -67.8151660,
            'titulo' => 'SEMARCS',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9610680,
            'lng' => -67.8152830,
            'titulo' => 'SEMEL',
            'descricao' => NULL,
            'mapas_categorias_id' => 2
        ]);

        Mapas::create([
            'lat' => -9.9688470,
            'lng' => -67.8263060,
            'titulo' => 'SEMSA',
            'descricao' => NULL,
            'mapas_categorias_id' => 3
        ]);

        Mapas::create([
            'lat' => -9.9769770,
            'lng' => -67.8100110,
            'titulo' => 'SMDGU NOVO',
            'descricao' => NULL,
            'mapas_categorias_id' => 3
        ]);

        Mapas::create([
            'lat' => -10.0147190,
            'lng' => -67.8039870,
            'titulo' => 'RODOVIARIA INTERNACIONAL',
            'descricao' => NULL,
            'mapas_categorias_id' => 3
        ]);

        Mapas::create([
            'lat' => -9.9676990,
            'lng' => -67.8067730,
            'titulo' => 'Escola de Governo',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9957750,
            'lng' => -67.8060840,
            'titulo' => 'CS CLAUDIA VITORINO',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9784470,
            'lng' => -67.8045390,
            'titulo' => 'ARY RODRIGUES',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9796160,
            'lng' => -67.8063250,
            'titulo' => 'CAMARA VEREADORES',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9810610,
            'lng' => -67.8153650,
            'titulo' => 'CASA ROSA',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9816300,
            'lng' => -67.8166100,
            'titulo' => 'CS MARIO MAIA',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9816300,
            'lng' => -67.8166100,
            'titulo' => 'PRAÇA DA JUVENTUDE',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9838000,
            'lng' => -67.8248240,
            'titulo' => 'CAC BAIXADA',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9828190,
            'lng' => -67.8259400,
            'titulo' => 'SEMSUR',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);

        Mapas::create([
            'lat' => -9.9727600,
            'lng' => -67.8267800,
            'titulo' => 'EMURB',
            'descricao' => NULL,
            'mapas_categorias_id' => 4
        ]);
    }
}
