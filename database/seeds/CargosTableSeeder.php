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
            'nome' => 'Diretor(a) Geral'
        ]);
        Cargos::create([
            'nome' => 'Chefe do Departamento de Infraestrutura'
        ]);
        Cargos::create([
            'nome' => 'Chefe do Departamento de Sistemas'
        ]);
        Cargos::create([
            'nome' => 'Coordenador(a) de Segurança da Informação'
        ]);
        Cargos::create([
            'nome' => 'Suporte ao Módulo de Compras, Licitações, Contratos e Materiais'
        ]);
        Cargos::create([
            'nome' => 'Suporte ao Módulo Orçamentário, Financeiro e Contábil'
        ]);
        Cargos::create([
            'nome' => 'Suporte ao Módulo Tributário'
        ]);
        Cargos::create([
            'nome' => 'Suporte ao Módulo de Protocolo, Obras, Frotas, e Patrimônio'
        ]);
        Cargos::create([
            'nome' => 'Suporte ao Módulo de Recursos Humanos'
        ]);
        Cargos::create([
            'nome' => 'Suporte aos Portais e Submódulos'
        ]);
        Cargos::create([
            'nome' => 'Suporte Técnico'
        ]);
        Cargos::create([
            'nome' => 'Coordenador(a) do Departamento de Redes Corporativas'
        ]);
        Cargos::create([
            'nome' => 'Monitoramento do Núcleo de Operação e Controle'
        ]);
    }
}
