<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Acontecimentos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'acontecimentos';
    protected $fillable = ['id', 'titulo', 'descricao', 'ocultar', 'criado_por', 'ano'];
}
