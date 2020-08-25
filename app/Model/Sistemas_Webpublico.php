<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sistemas_Webpublico extends Model
{
    //
    protected $table = 'sistemas_webpublicos';
    protected $fillable = ['id', 'num_usuarios', 'num_linhas_codigo', 'num_modulos', 'num_telas', 'num_horas', 'num_tabelas', 'ch_recursos_humanos', 'ch_administrativo', 'ch_contabil', 'ch_transporte', 'ch_portais', 'ch_previdenciario', 'ch_tributario', 'criado_por', 'num_areas_gestao', 'hr_recursos_humanos', 'hr_administrativo', 'hr_contabil', 'hr_transporte', 'hr_portais', 'hr_previdenciario', 'hr_tributario'];
}
