<?php

use Illuminate\Database\Seeder;
use App\Model\Infra_config;

class InfraConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Infra_config::create([
            'media_chamados_fibra' => 0,
            'media_chamados_cidade_digital' => 0,
            'num_switch' => 0,
            'num_servidores_virtuais' => 0,
            'num_servidores_fisicos' => 0,
            'num_usuarios_internet' => 0,
            'num_email_corp' => 0,
            'media_ataques' => 0,
            'media_internet_social_dia' => 0,
            'num_usuarios_internet_social' => 0,
            'num_conexao_fibra' => 0,
            'num_conexao_radio' => 0,
            'criado_por' => 1
        ]);

        Infra_config::create([
            'media_chamados_fibra' => 0,
            'media_chamados_cidade_digital' => 0,
            'num_switch' => 89,
            'num_servidores_virtuais' => 0,
            'num_servidores_fisicos' => 0,
            'num_usuarios_internet' => 0,
            'num_email_corp' => 0,
            'media_ataques' => 0,
            'media_internet_social_dia' => 0,
            'num_usuarios_internet_social' => 0,
            'num_conexao_fibra' => 0,
            'num_conexao_radio' => 0,
            'criado_por' => 1
        ]);

        Infra_config::create([
            'media_chamados_fibra' => 0,
            'media_chamados_cidade_digital' => 0,
            'num_switch' => 89,
            'num_servidores_virtuais' => 75,
            'num_servidores_fisicos' => 3,
            'num_usuarios_internet' => 5037,
            'num_email_corp' => 5037,
            'media_ataques' => 0,
            'media_internet_social_dia' => 0,
            'num_usuarios_internet_social' => 0,
            'num_conexao_fibra' => 0,
            'num_conexao_radio' => 0,
            'criado_por' => 1
        ]);

        Infra_config::create([
            'media_chamados_fibra' => 5,
            'media_chamados_cidade_digital' => 28,
            'num_switch' => 89,
            'num_servidores_virtuais' => 75,
            'num_servidores_fisicos' => 3,
            'num_usuarios_internet' => 5037,
            'num_email_corp' => 5037,
            'media_ataques' => 0,
            'media_internet_social_dia' => 0,
            'num_usuarios_internet_social' => 0,
            'num_conexao_fibra' => 0,
            'num_conexao_radio' => 0,
            'criado_por' => 1
        ]);

        Infra_config::create([
            'media_chamados_fibra' => 5,
            'media_chamados_cidade_digital' => 28,
            'num_switch' => 89,
            'num_servidores_virtuais' => 75,
            'num_servidores_fisicos' => 3,
            'num_usuarios_internet' => 5037,
            'num_email_corp' => 5037,
            'media_ataques' => 99534,
            'media_internet_social_dia' => 80,
            'num_usuarios_internet_social' => 4429,
            'num_conexao_fibra' => 0,
            'num_conexao_radio' => 0,
            'criado_por' => 1
        ]);

        Infra_config::create([
            'media_chamados_fibra' => 5,
            'media_chamados_cidade_digital' => 28,
            'num_switch' => 89,
            'num_servidores_virtuais' => 75,
            'num_servidores_fisicos' => 3,
            'num_usuarios_internet' => 5037,
            'num_email_corp' => 5037,
            'media_ataques' => 99534,
            'media_internet_social_dia' => 80,
            'num_usuarios_internet_social' => 4429,
            'num_conexao_fibra' => 53,
            'num_conexao_radio' => 88,
            'criado_por' => 1
        ]);
    }
}
