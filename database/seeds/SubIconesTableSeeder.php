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
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://play.google.com/store/apps/details?id=riobranco.ac.gov.br.nivel_rio',
            'ocultar' => 0,
            'icones_id' => 13,
        ]);
        Sub_Icone::create([
            'nome' => 'Zona Azul Rio Branco',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://play.google.com/store/apps/details?id=br.com.mobilicidade.android.riobranco.gui',
            'ocultar' => 0,
            'icones_id' => 13,
        ]);
        Sub_Icone::create([
            'nome' => 'Consignação',
            'caminho' => '/images/icones/icon-consignacao.png',
            'link' => 'http://econsig.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Saúde Mental',
            'caminho' => '/images/icones/icon-saude-mental.png',
            'link' => 'http://intranet.riobranco.ac.gov.br/sistemas/Higeia/autentica.php',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Cadastro Funebres',
            'caminho' => '/images/icones/icon-cadastro-funebres.png',
            'link' => 'http://intranet.riobranco.ac.gov.br/sistemas/Thanatos/autentica.php',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Tanen',
            'caminho' => '/images/icones/icon-tanen.png',
            'link' => 'http://intranet.riobranco.ac.gov.br/sistemas/tanen/autentica.php',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'id' => 9,
            'nome' => 'Ácone',
            'caminho' => '/images/icones/icon-acona.png',
            'link' => 'http://acre.acone.com.br/',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Minerva',
            'caminho' => '/images/icones/icon-minerva.png',
            'link' => 'http://intranet.riobranco.ac.gov.br/sistemas/minerva/autentica.php',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);
        Sub_Icone::create([
            'nome' => 'Libre Office',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://pt-br.libreoffice.org/baixe-ja/libreoffice-novo/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'GIMP',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://www.gimp.org/downloads/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Umbrello',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://umbrello.kde.org/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Thunderbird',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://www.thunderbird.net/pt-BR/',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'WinRAR',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'https://www.win-rar.com/start.html?&L=9',
            'ocultar' => 0,
            'icones_id' => 8,
        ]);
        Sub_Icone::create([
            'nome' => 'Gestão de Materiais',
            'caminho' => '/images/icones/icon-controle-materiais.png',
            'link' => 'http://aplicacao.riobranco.ac.gov.br/SISTEMAS/SMAT_RB/',
            'ocultar' => 0,
            'icones_id' => 10,
        ]);

        Sub_Icone::create([
            'nome' => 'Orçamentário e Contábil',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/pdf/FORMULARIO-CONTABIL.pdf',
            'ocultar' => 0,
            'icones_id' => 1,
        ]);

        Sub_Icone::create([
            'nome' => 'Recursos Humanos',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/pdf/FORMULARIO-RH.pdf',
            'ocultar' => 0,
            'icones_id' => 1,
        ]);

        Sub_Icone::create([
            'nome' => 'Sistemas Administrativos',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/pdf/FORMULARIO-ADMINISTRATIVO.pdf',
            'ocultar' => 0,
            'icones_id' => 1,
        ]);

        Sub_Icone::create([
            'nome' => 'Tributário',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/pdf/FORMULARIO-TRIBUT%c3%81RIO.pdf',
            'ocultar' => 0,
            'icones_id' => 1,
        ]);

        Sub_Icone::create([
            'nome' => 'Transportes',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/pdf/FORMULARIO-RBTRANS.pdf',
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
