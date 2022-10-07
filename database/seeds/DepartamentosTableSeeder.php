<?php

use Illuminate\Database\Seeder;
use App\Model\Departamentos;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Departamentos::create([
            'nome' => 'Diretoria',
            'secretarias_id' => 14
        ]);
        Departamentos::create([
            'nome' => 'Infraestrutura',
            'secretarias_id' => 14
        ]);
        Departamentos::create([
            'nome' => 'Sistemas',
            'secretarias_id' => 14
        ]);
        Departamentos::create([
            'nome' => 'Suportes',
            'secretarias_id' => 14
        ]);
    }
}

