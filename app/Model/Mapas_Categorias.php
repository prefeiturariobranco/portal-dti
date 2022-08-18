<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Mapas_Categorias extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'mapas_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
