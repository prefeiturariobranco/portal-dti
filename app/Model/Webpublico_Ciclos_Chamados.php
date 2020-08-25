<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Webpublico_Ciclos_Chamados extends Model
{
    //
    protected $table = 'webpublico_ciclos_chamados';
    protected $fillable = ['id', 'ch_recursos_humanos', 'ch_tributario', 'ch_administrativo', 'ch_contabil', 'ch_geral', 'ch_transporte', 'ch_previdenciario', 'ch_infra', 'ciclo'];
}
