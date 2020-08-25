<?php

use Illuminate\Database\Seeder;
use App\Model\Secretarias;
class SecretariasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE SAÚDE - SEMSA',
            'sigla' => 'SEMSA'
        ]);
        Secretarias::create([
            'nome' => 'PREFEITURA MUNICIPAL DE RIO BRANCO/ CENTRO',
            'sigla' => NULL
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE FINANÇAS - SEFIN',
            'sigla' => 'SEFIN'
        ]);
        Secretarias::create([
            'nome' => 'RBTRANS',
            'sigla' => 'RBTRANS'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE ZELADORIA DA CIDADE - SMZC',
            'sigla' => 'SMZC'
        ]);
        Secretarias::create([
            'nome' => 'EMPRESA MUNICIPAL DE URBANIZAÇÃO - EMURB',
            'sigla' => 'EMURB'
        ]);
        Secretarias::create([
            'nome' => 'PROCURADORIA GERAL DO MUNICÍPIO - PGM',
            'sigla' => 'PGM'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE INFRAESTRUTURA E MOBILIDADE URBANA - SEINFRA',
            'sigla' => 'SEINFRA'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA DE ASSISTÊNCIA SOCIAL - SEMCAS',
            'sigla' => 'SEMCAS'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE MEIO AMBIENTE - SEMEIA',
            'sigla' => 'SEMEIA'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE EDUCAÇÃO - SEME',
            'sigla' => 'SEME'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE AGRICULTURA FAMILIAR E DESENVOLVIMENTO ECONÔMICO - SAFRA',
            'sigla' => 'SAFRA'
        ]);
        Secretarias::create([
            'nome' => 'SECRETARIA MUNICIPAL DE ESPORTE E LAZER - SEMEL',
            'sigla' => 'SEMEL'
        ]);
        Secretarias::create([
            'nome' => 'Secretaria Municipal de Gestão Administrativa e Tecnologia da Informação',
            'sigla' => 'SEGATI'
        ]);
    }
}
