<?php

use Illuminate\Database\Seeder;
use App\Model\Permissoes;

class PermissoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permissoes::create([
            'nome' => 'Usuarios'
        ]);

        Permissoes::create([
            'nome' => 'Noticias'
        ]);

        Permissoes::create([
            'nome' => 'Investimentos'
        ]);

        Permissoes::create([
            'nome' => 'Mapas'
        ]);

        Permissoes::create([
            'nome' => 'Categorias - Icones'
        ]);

        Permissoes::create([
            'nome' => 'Icones'
        ]);

        Permissoes::create([
            'nome' => 'Sub-icones'
        ]);

        Permissoes::create([
            'nome' => 'TI Local'
        ]);

        Permissoes::create([
            'nome' => 'Contatos'
        ]);

        Permissoes::create([
            'nome' => 'Estatisticas'
        ]);
    }
}
