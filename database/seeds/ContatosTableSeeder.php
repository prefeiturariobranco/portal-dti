<?php

use Illuminate\Database\Seeder;
use App\Model\Contatos;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 2,
            'nome'  => 'Luiz Aguirre',
            'telefone'  => '3211 - 2212',
            'email' => 'luiz.aguirre@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 4,
            'nome'  => 'Genésio Mendonça',
            'telefone'  => '3211 - 2200',
            'email' => 'genesio.mendonca@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 5,
            'nome'  => 'Rafaella Magalhães',
            'telefone'  => '3211 - 3976',
            'email' => 'rafaella.santos@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 4,
            'nome'  => 'Oseias Haluen',
            'telefone'  => '3211 - 3977',
            'email' => 'oseias.haluen@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 11,
            'nome'  => 'Silvinha Duarte',
            'telefone'  => '3211 - 2212',
            'email' => 'silvinha.duarte@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 12,
            'nome'  => 'Mônica Meireles',
            'telefone'  => '3211 - 2212',
            'email' => 'monica.meireles@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 13,
            'nome'  => 'Iury Nascimento',
            'telefone'  => '3211 - 2246',
            'email' => 'iury.souza@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 13,
            'nome'  => 'Antônio Nepomuceno',
            'telefone'  => '3211 - 2245',
            'email' => 'antonio.nepomuceno@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 8,
            'nome'  => 'Iara Andrades',
            'telefone'  => '3211 - 3976',
            'email' => 'iara.andrades@riobranco.ac.gov.br',
        ]);

        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 7,
            'nome'  => 'Jorge Fonseca',
            'telefone'  => '3211 - 3975',
            'email' => 'jorge.fonseca@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 7,
            'nome'  => 'Reus Peixoto',
            'telefone'  => '3211 - 3975',
            'email' => 'reus.peixoto@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 6,
            'nome'  => 'Uiara Jucá',
            'telefone'  => '3211 - 3976',
            'email' => 'uiara.nascimento@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 10,
            'nome'  => 'Thiago Franco',
            'telefone'  => '3211 - 3974',
            'email' => 'thiago.franco@riobranco.ac.gov.br',

        ]);
    }
}
