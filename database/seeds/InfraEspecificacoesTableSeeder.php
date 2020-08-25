<?php

use Illuminate\Database\Seeder;
use App\Model\EspecificacaoTi;

class InfraEspecificacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EspecificacaoTi::create([
            'nome' => 'Especificação de Desktop Tipo 1',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20Desktop%20Tipo%201.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de Desktop Tipo 2',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20Desktop%20Tipo%202.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de Desktop Tipo 3',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20Desktop%20Tipo%203.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de Desktop Tipo 4',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20Desktop%20Tipo%204.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de Desktop Tipo 5',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20Desktop%20Tipo%205.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de impressora multifuncional a laser',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20impressora%20multifuncional%20a%20laser.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de nobreak Tipo 1',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20nobreak%20Tipo%201.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de nobreak Tipo 2',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20nobreak%20Tipo%201.pdf',
            'usuario_id' => 1,
        ]);

        EspecificacaoTi::create([
            'nome' => 'Especificação de nobreak de rack',
            'arquivo' => '/pdf/Especifica%c3%a7%c3%a3o%20de%20nobreak%20de%20rack.pdf',
            'usuario_id' => 1,
        ]);
    }
}
