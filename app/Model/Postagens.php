<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Contracts\Auditable;

class Postagens extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $fillable = ['id', 'imagem', 'titulo', 'url_documento', 'conteudo', 'criado_por', 'ocultar', 'created_at'];
    protected $table = 'postagens';
}
