<?php

namespace Database\Seeders;

use App\Model\Sistemas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SistemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sistemas::create([
            'nome_sistema' => 'RBWeb',
            'ocultar' => 0
        ]);
    }
}
