<?php

namespace Database\Seeders;

use App\Model\Tipo_participante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoParticipantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_participante::create([
           'tipo_participante' => 'DTI'
        ]);

        Tipo_participante::create([
           'tipo_participante' => 'Fornecedor'
        ]);

        Tipo_participante::create([
           'tipo_participante' => 'Usuário'
        ]);
    }
}
