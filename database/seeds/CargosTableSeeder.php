<?php

use Illuminate\Database\Seeder;
use App\Model\Cargos;
class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cargos::create([
            'id' => 1,
            'nome' => 'Diretor(a) de Tecnologia da Informação'
        ]);
        Cargos::create([
            'id' => 2,
            'nome' => 'Assessoria Técnica'
        ]);
        Cargos::create([
            'id' => 3,
            'nome' => 'Gerente do Departamento de Infraestrutura'
        ]);
        Cargos::create([
            'id' => 4,
            'nome' => 'Gerente do Departamento de Sistemas'
        ]);
        Cargos::create([
            'id' => 5,
            'nome' => 'Assessoria Técnica e Suporte ao Módulo de Patrimônio, Frota, Obras e Portais'
        ]);
        Cargos::create([
            'id' => 6,
            'nome' => 'Product Owner e Suporte do RBDOC'
        ]);
        Cargos::create([
            'id' => 7,
            'nome' => 'Desenvolvedor Sênior'
        ]);
        Cargos::create([
            'id' => 8,
            'nome' => 'Desenvolvedor Pleno'
        ]);
        Cargos::create([
            'id' => 9,
            'nome' => 'Desenvolvedor Junior'
        ]);
        Cargos::create([
            'id' => 10,
            'nome' => 'Assessoria de Segurança da Informação'
        ]);
        Cargos::create([
            'id' => 11,
            'nome' => 'Suporte de Infraestrutura'
        ]);
        Cargos::create([
            'id' => 12,
            'nome' => 'Suporte Técnico Prefeitura'
        ]);
        Cargos::create([
            'id' => 13,
            'nome' => 'Suporte Técnico'
        ]);
        Cargos::create([
            'id' => 14,
            'nome' => 'Suporte ao Módulo de Compras, Licitações, Contratos, Materiais e Protocolos'
        ]);
        Cargos::create([
            'id' => 15,
            'nome' => 'Suporte ao Módulo Tributário e RBTrans'
        ]);
        Cargos::create([
            'id' => 16,
            'nome' => 'Suporte ao Módulo Orçamentário, Financeiro e Contábil'
        ]);
    }
}
