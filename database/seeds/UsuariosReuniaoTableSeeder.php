<?php

namespace Database\Seeders;

use App\Model\UsuariosReuniao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosReuniaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuariosReuniao::create([
            'reuniao_id' => 1,
            'participante_id' => 1,
        ]);

        UsuariosReuniao::create([
            'reuniao_id' => 1,
            'participante_id' => 2,
        ]);
    }
}
