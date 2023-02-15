<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Unidades extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'unidades';
    protected $fillable = [
        'nome_unidade',
        'ocultar'
    ];
}
