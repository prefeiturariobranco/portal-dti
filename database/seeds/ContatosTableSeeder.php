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
            'departamento_id' => 1,
            'cargos_id'  => 1,
            'nome'  => 'Manoel de Jesus Lima Ferreira',
            'telefone'  => '(68) 3211-2207',
            'email' => 'manoel.jesus@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 1,
            'cargos_id'  => 2,
            'nome'  => 'Alcimara Santos',
            'telefone'  => '(68) 3211-4135',
            'email' => 'alcimara.silva@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 4,
            'nome'  => 'Anderson Santos Fernandes',
            'telefone'  => '(68) 3211-3974',
            'email' => 'anderson.fernandes@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 5,
            'nome'  => 'Stenio Canizio',
            'telefone'  => '(68) 3211-3976',
            'email' => 'stenio.canizio@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 6,
            'nome'  => 'Marcos Henrique',
            'telefone'  => null,
            'email' => 'marcos.henrique@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 7,
            'nome'  => 'Anderson Araújo',
            'telefone'  => null,
            'email' => 'anderson.araujo@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 8,
            'nome'  => 'José Gabriel',
            'telefone'  => null,
            'email' => 'jose.coelho@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 9,
            'nome'  => 'Jade Thomaz',
            'telefone'  => null,
            'email' => 'jamile.thomaz@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 3,
            'cargos_id'  => 9,
            'nome'  => 'Tainá Cavalcante',
            'telefone'  => null,
            'email' => 'taina.bezerra@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 3,
            'nome'  => 'Mônica Meireles',
            'telefone'  => '(68) 3211-2212',
            'email' => 'monica.meireles@riobranco.ac.gov.br',
        ]);

        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 10,
            'nome'  => 'Oseias Haluen',
            'telefone'  => '(68) 3211-3977',
            'email' => 'oseias.haluen@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 10,
            'nome'  => 'Antônio Nepomuceno',
            'telefone'  => '(68) 3211-2200',
            'email' => 'antonio.nepomuceno@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 10,
            'nome'  => 'Antônio Junior',
            'telefone'  => null,
            'email' => 'antonio.magalhaes@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 11,
            'nome'  => 'Iury Nascimento',
            'telefone'  => '(68) 3211-2246',
            'email' => 'iury.souza@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 2,
            'cargos_id'  => 11,
            'nome'  => 'Matheus Cunha',
            'telefone'  => null,
            'email' => 'matheus.cunha@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 4,
            'cargos_id'  => 12,
            'nome'  => 'Hercules Mota',
            'telefone'  => '(68) 3212-7036',
            'email' => 'hercules.mota@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 4,
            'cargos_id'  => 12,
            'nome'  => 'José Ferraz Neto',
            'telefone'  => null,
            'email' => 'jose.ferrazneto@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 4,
            'cargos_id'  => 13,
            'nome'  => 'Cynthia Yasmin',
            'telefone'  => null,
            'email' => 'cynthia.soares@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 4,
            'cargos_id'  => 14,
            'nome'  => 'Francisco Cacau',
            'telefone'  => null,
            'email' => 'cacau.junior@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 4,
            'cargos_id'  => 15,
            'nome'  => 'Reus Peixoto',
            'telefone'  => '(68) 3212-7082',
            'email' => 'reus.peixoto@riobranco.ac.gov.br',
        ]);
        Contatos::create([
            'departamento_id' => 4,
            'cargos_id'  => 16,
            'nome'  => 'Uiara Jucá',
            'telefone'  => '(68) 3211-3976',
            'email' => 'uiara.nascimento@riobranco.ac.gov.br',
        ]);
    }
}
