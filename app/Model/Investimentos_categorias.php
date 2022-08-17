<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Investimentos_categorias extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'investimentos_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
