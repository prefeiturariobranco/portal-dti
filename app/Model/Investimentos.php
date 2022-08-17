<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Investimentos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'investimentos';
    protected $fillable = ['id', 'nome', 'valor', 'ocultar', 'investimentos_categorias_id', 'criado_por', 'cor'];
}
