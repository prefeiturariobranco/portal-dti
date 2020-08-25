<?php

use Illuminate\Database\Seeder;
use App\Model\Usuarios;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuarios::create([
            'nome' => 'Administrador',
            'login' => 'admin',
            'senha' => \Illuminate\Support\Facades\Hash::make('admin'),
            'ocultar' => '0',
            'imagem' => 'default.png',
            'data_exclusao' => NULL,
            'cargos_id' => 1,
            'departamentos_id' => 1,
            'telefone_sala' => NULL,
            'telefone_pessoal' => NULL,
            'email' => NULL,
            'data_admissao' => NULL,
            'data_exoneracao' => NULL,
            'data_nascimento' => NULL,
            'criado_por' => 0
        ]);
    }
}
