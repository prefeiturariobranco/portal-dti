<?php

use Illuminate\Database\Seeder;
use App\Model\Equipe_config;

class EquipeConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Equipe_config::create([
            'num_comissionados' => 9,
            'num_tercerizados' => 0,
            'num_estagiarios' => 8,
            'num_efetivos' => 8
        ]);
    }
}
