<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class EspecificacaoTi extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'infra_especificacoes_ti';
    protected $fillable = ['id', 'nome', 'arquivo', 'ocultar', 'usuario_id'];
}
