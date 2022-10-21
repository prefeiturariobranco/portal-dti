<?php

use Illuminate\Database\Seeder;
use App\Model\Icones;
class IconesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Icones::create([
            'dinamico' => 1,
            'nome' => 'Solicitação de Acesso',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-solicitacao-acesso.png',
            'link' => '/submenu/1',
            'ocultar' => 0,
            'icones_categorias_id' => 4
        ]);

        Icones::create([
            'dinamico' => 2,
            'nome' => 'Formulário de E-mail',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-email.png',
            'link' => 'https://formail.riobranco.ac.gov.br/',
            'ocultar' => 0,
            'icones_categorias_id' => 4
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'Solicitação de Chamado Técnico',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-sua.png',
            'link' => 'http://sua.riobranco.ac.gov.br',
            'ocultar' => 0,
            'icones_categorias_id' => 4,
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'Especificações Técnicas',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-especificacoes-tecnicas.png',
            'link' => '/especificacoes-ti',
            'ocultar' => 0,
            'icones_categorias_id' => 4,
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'Tutoriais',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-tutoriais-wiki.png',
            'link' => '/tutoriais',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'Carta de Serviços',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-carta-de-sevicos.png',
            'link' => '/',
            'ocultar' => 1,
            'icones_categorias_id' => 1,
        ]);
        Icones::create([
            'dinamico' => 3,
            'nome' => 'Perguntas Frequentes',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-perguntas-respostas.png',
            'link' => '/perguntas',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
        Icones::create([
            'id' => 8,
            'dinamico' => 1,
            'nome' => 'Portais',
            'subtitulo' => '',
            'caminho' => '/images/icones/portais-removebg.png',
            'link' => '/submenu/8',
            'ocultar' => 0,
            'icones_categorias_id' => 4,
        ]);
        Icones::create([
            'dinamico' => 3,
            'nome' => 'Intranet',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-intranet.png',
            'link' => '/login',
            'ocultar' => 0,
            'icones_categorias_id' => 4,
        ]);
        Icones::create([
            'dinamico' => 1,
            'nome' => 'Sistemas',
            'subtitulo' => 'Conheça os sistemas...',
            'caminho' => '/images/icones/icon-sistemas.png',
            'link' => '/submenu/10',
            'ocultar' => 0,
            'icones_categorias_id' => 4,
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'RBWeb',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-webpublico.png',
            'link' => 'http://webpublico.riobranco.ac.gov.br',
            'ocultar' => 0,
            'icones_categorias_id' => 4,
        ]);
        Icones::create([
            'dinamico' =>2,
            'nome' => 'Transparência',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-portal-transparencia.png',
            'link' => 'http://transparencia.riobranco.ac.gov.br',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
        Icones::create([
            'dinamico' => 1,
            'nome' => 'Aplicativos',
            'subtitulo' => 'Conheça os aplicativos criados para ajudar a sociedade acreana...',
            'caminho' => '/images/icones/icon-aplicativo.png',
            'link' => '/submenu/13',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'Cidadão',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'http://transportes.riobranco.ac.gov.br',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
        Icones::create([
            'dinamico' => 2,
            'nome' => 'Transporte',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-portal-transporte.png',
            'link' => 'http://transportes.riobranco.ac.gov.br',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
        Icones::create([
            'dinamico' => '2',
            'nome' => 'E-Mail Funcional',
            'subtitulo' => '',
            'caminho' => '/images/icones/icon-email.png',
            'link' => '/images/icones/icon-email.png',
            'ocultar' => 0,
            'icones_categorias_id' => null,
        ]);
    }
}
