<?php

namespace Database\Seeders;

use App\Model\Participante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Participante::create([
            'nome_particpante' => 'João Santos Texeira',
            'tipo_participante' => 1,
        ]);

        Participante::create([
            'nome_particpante' => 'Elisa Freire Sousa',
            'tipo_participante' => 2,
        ]);
    }
}
