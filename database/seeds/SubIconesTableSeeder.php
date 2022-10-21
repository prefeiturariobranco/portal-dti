<?php

use Illuminate\Database\Seeder;
use App\Model\Sub_Icone;

class SubIconesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sub_Icone::create([
        'nome' => 'Meu Ônibus',
        'caminho' => '/images/icones/icon-portal-transporte.png',
        'link' => 'https://play.google.com/store/apps/details?id=br.com.m2m.meuonibus.riobranco',
        'ocultar' => 0,
        'icones_id' => 13,
        ]);
        Sub_Icone::create([
            'nome' => 'Alerta Rio',
            'caminho' => '/images/icones/icon-alertario.png',
            'link' => 'https://play.google.com/store/apps/details?id=riobranco.ac.gov.br.nivel_rio',
            'ocultar' => 0,
            'icones_id' => 13,
        ]);
        Sub_Icone::create([
            'nome' => 'Zona Azul Rio Branco',
            'caminho' => '/images/icones/icon-zonaazul.png',
            'link' => 'https://play.google.com/store/apps/details?id=br.com.mobilicidade.android.riobranco.gui',
            'ocultar' => 0,
            'icones_id' => 13,
        ]);
        Sub_Icone::create([
            'nome' => 'SITGeo',
            'caminho' => '/images/icones/icon-sistemas.png',
            'link' => 'http://sit.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'G-MUS',
            'caminho' => '/images/icones/gmus-removebg.png',
            'link' => 'https://gmus.riobranco.ac.gov.br/home',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Diário Oficial',
            'caminho' => '/images/icones/icon-minerva.png',
            'link' => 'http://diario.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'WebDesk',
            'caminho' => '/images/icones/icon-sistemas.png',
            'link' => 'https://chamados.webpublico.com.br/#/login',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'RB Simplificado',
            'caminho' => '/images/icones/icon-sistemas.png',
            'link' => 'https://rbsimplificado.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Portal RBDoc',
            'caminho' => '/images/icones/icon-minerva.png',
            'link' => 'https://portalrbdoc.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Portal da Transparência',
            'caminho' => '/images/icones/icon-portal-transparencia.png',
            'link' => 'http://transparencia.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Portal do Transporte',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'http://transportes.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Portal do Turismo',
            'caminho' => '/images/icones/portais-removebg.png',
            'link' => 'http://turismo.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Portal da Cultura',
            'caminho' => '/images/icones/portais-removebg.png',
            'link' => 'https://fgb.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);

        Sub_Icone::create([
            'nome' => 'Portal do Cidadão',
            'caminho' => '/images/icones/icon-portal-cidadao.png',
            'link' => 'http://portalcidadao.riobranco.ac.gov.br/todos-servicos/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);

        Sub_Icone::create([
            'nome' => 'Portal do SAERB',
            'caminho' => '/images/icones/portais-removebg.png',
            'link' => 'https://saerb.jtech.com.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);

        Sub_Icone::create([
            'nome' => 'Portal da Escola',
            'caminho' => '/images/icones/escola-removebg.png',
            'link' => 'http://portaldaescola.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);

        Sub_Icone::create([
            'nome' => 'RBWeb - Geral Sistemas',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => 'http://sua.riobranco.ac.gov.br/plugins/formcreator/front/formdisplay.php?id=20',
            'ocultar' => 0,
            'icones_id' => 1,
        ]);

        Sub_Icone::create([
            'nome' => 'SitGeo',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/pdf/FORMULARIO-SITGEO1.pdf',
            'ocultar' => 0,
            'icones_id' => 1,
        ]);
    }
}
