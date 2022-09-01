<?php

use Illuminate\Database\Seeder;
use App\Model\Tutoriais;
class TutoriaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutoriais::create([
            'titulo' => 'RBponto',
            'conteudo' => 'Primeiro acesso',
            'ocultar' => '0',
            'imagem' => '',
            'imagem1' => '',
            'imagem2' => '',
            'imagem3' => '',
            'imagem4' => '',
            'imagem5' => '',
            'video' => '',
            'criado_por' => 1
        ]);
    }
}
