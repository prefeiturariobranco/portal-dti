<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Perguntas extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'perguntas';
    protected $fillable = ['id', 'titulo', 'conteudo', 'ocultar', 'criado_por'];
}
