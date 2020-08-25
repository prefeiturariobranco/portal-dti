<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EspecificacaoTi extends Model
{
    //
    protected $table = 'infra_especificacoes_ti';
    protected $fillable = ['id', 'nome', 'arquivo', 'ocultar', 'usuario_id'];
}
