<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infra_config extends Model
{
    //
    protected $table = 'infra_configs';
    protected $fillable = ['id', 'media_chamados_fibra', 'media_chamados_cidade_digital', 'num_switch', 'num_servidores_virtuais', 'num_servidores_fisicos', 'num_usuarios_internet', 'num_email_corp', 'media_ataques', 'media_internet_social_dia', 'num_usuarios_internet_social', 'num_conexao_fibra', 'num_conexao_radio', 'criado_por'];
}
