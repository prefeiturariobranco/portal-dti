<?php

use Illuminate\Database\Seeder;
use App\Model\Ti_Local;

class TiLocalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ti_Local::create([
            'secretaria_id' => 1,
            'nome' => 'Sanny Débora',
            'telefone' => '98118 - 7509',
            'email' => 'sanny.lopes@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 2,
            'nome' => 'João Paulo',
            'telefone' => '3212 - 7036 / 99964 - 0958 / 99216 - 0000',
            'email' => 'joaopaulo.maia@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 3,
            'nome' => 'Yago',
            'telefone' => '3212 - 7104',
            'email' => 'yago.araujo@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 4,
            'nome' => 'Pablo Almeida',
            'telefone' => '99962 - 7342',
            'email' => 'Pablo.almeida@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 5,
            'nome' => 'João Ricardo',
            'telefone' => '99999 - 0887',
            'email' => 'joao.ricardo@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 6,
            'nome' => 'Gutenber Aguiar',
            'telefone' => '992472291',
            'email' => 'gutenberg.aguiar@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 6,
            'nome' => 'Rosevaldo Brilhante',
            'telefone' => '999442080',
            'email' => 'rosevaldo.brilhante@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 7,
            'nome' => 'Softplan - Kenneth Costa',
            'telefone' => '3223 - 4349 / 99978 - 7845',
            'email' => 'kenneth.costa@softplan.com.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 7,
            'nome' => 'Bruno Freitas',
            'telefone' => '3223 - 4349',
            'email' => NULL,
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 8,
            'nome' => 'Darlan Brito',
            'telefone' => '99985 - 3201',
            'email' => 'darlan.brito@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 9,
            'nome' => 'Tiago Isper',
            'telefone' => '99995 - 5736',
            'email' => 'tiago.carvalho@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 10,
            'nome' => 'Berg',
            'telefone' => '99913 - 9999',
            'email' => 'antonio.matos@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 11,
            'nome' => 'Manoel de Jesus',
            'telefone' => '3211 - 2402 / 99964 - 3562',
            'email' => 'manoel.jesus@robranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 11,
            'nome' => 'Jamilson',
            'telefone' => '3244 -1779 / 3224 - 1788 / 99212 - 7746',
            'email' => NULL,
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 12,
            'nome' => 'Jamilson Neri',
            'telefone' => '3224 - 7941 / 99966 - 5005 ',
            'email' => 'jamilsson.neri@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

        Ti_Local::create([
            'secretaria_id' => 13,
            'nome' => 'Geison',
            'telefone' => '3211 - 2204 / 99992 - 0750',
            'email' => 'geison.araujo@riobranco.ac.gov.br',
            'ocultar' => 0
        ]);

    }
}
