<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Documentos_categorias extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'documentos_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
