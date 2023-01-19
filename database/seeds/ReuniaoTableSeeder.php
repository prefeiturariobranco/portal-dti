<?php

namespace Database\Seeders;

use App\Model\Reuniao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReuniaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reuniao::create([
            'participantes' => 'João',
            'solicitacao' => '',
            'providencias' => '',
            'sistema_id' => 1,
            'unidade_id' => 1,
        ]);
    }
}
