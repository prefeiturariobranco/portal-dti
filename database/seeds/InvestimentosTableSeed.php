<?php

use Illuminate\Database\Seeder;
use App\Model\Investimentos;
class InvestimentosTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Investimentos::create([
            'nome' => 'Ampliação da malha de fibra optica',
            'valor' => 3645280.00,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
            'cor' => '#ff0017'
        ]);

        Investimentos::create([
            'nome' => 'Modernização de equipamentos',
            'valor' => 456940.00,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Instalação de readequação de rede lógica',
            'valor' => 219414.00,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Construção do Datacenter',
            'valor' => 4097495.00,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
            'cor' => '#6a2290'
        ]);

        Investimentos::create([
            'nome' => 'Ampliação e modernização da rede metropolitana sem fio',
            'valor' => 451400.00,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Construção do CAC da Rodoviária',
            'valor' => 94920.01,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
            'cor' => '#00ff03'
        ]);

        Investimentos::create([
            'nome' => 'Modernização da DTI',
            'valor' => 456940.00,
            'investimentos_categorias_id' => 3,
            'criado_por' => 1,
            'cor' => '#000000'
        ]);

        Investimentos::create([
            'nome' => 'Fortalecimento da Administração Tributária',
            'valor' => 1802609.00,
            'investimentos_categorias_id' => 2,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Capacitação na área de licitações públicas e contratos administrativos',
            'valor' => 7441.00,
            'investimentos_categorias_id' => 2,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Contratação de consultoria especializada',
            'valor' => 96000.00,
            'investimentos_categorias_id' => 4,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Investimento Mensal na Manutenção do Cidade Digital',
            'valor' => 156450.00,
            'investimentos_categorias_id' => 3,
            'ocultar' => 1,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'Total de Investimento Mensal em Manutenção de Sistemas',
            'valor' => 519159.00,
            'investimentos_categorias_id' => 1,
            'ocultar' => 1,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'RBWeb',
            'valor' => 213869.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#ff0009'
        ]);

        Investimentos::create([
            'nome' => 'e-SAJ',
            'valor' => 70256.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#ff00b7'
        ]);

        Investimentos::create([
            'nome' => 'Gmus',
            'valor' => 118950.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#ffa000'
        ]);

        Investimentos::create([
            'nome' => 'NFS-e',
            'valor' => 44089.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
        ]);

        Investimentos::create([
            'nome' => 'SITGeo',
            'valor' => 12000.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#ff8000'
        ]);

        Investimentos::create([
            'nome' => 'Manutenção Cidade Digital',
            'valor' => 156450.00,
            'investimentos_categorias_id' => 5,
            'criado_por' => 1,
            'cor' => '#4f7e21'
        ]);

        Investimentos::create([
            'nome' => 'Sistema de Gestão Eletrônica de Documentos (GED)',
            'valor' => 900000.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#19693c'
        ]);

        Investimentos::create([
            'nome' => 'Pagamento do IPTU por Aplicativo',
            'valor' => 0.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#00ab8c'
        ]);

        Investimentos::create([
            'nome' => 'Prontuário Eletrônico em Todas as Unidades de Saúde',
            'valor' => 0.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#faaf5e'
        ]);

        Investimentos::create([
            'nome' => 'Nova Nota Fiscal Eletrônica (nfe)',
            'valor' => 334004.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#77195e'
        ]);

        Investimentos::create([
            'nome' => 'Sistema de Gestão de Educação',
            'valor' => 650000.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#b9aff4'
        ]);

        Investimentos::create([
            'nome' => 'Sistema de Contratos (Webpúblico)',
            'valor' => 0.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#057dc4'
        ]);

        Investimentos::create([
            'id' => 26,
            'nome' => 'Ajuizamento de Dívidas (CDA)',
            'valor' => 0.00,
            'investimentos_categorias_id' => 1,
            'criado_por' => 1,
            'cor' => '#2bb6a3'
        ]);

    }
}
