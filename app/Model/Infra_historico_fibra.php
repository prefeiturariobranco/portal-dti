<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Infra_historico_fibra extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'infra_historico_fibras';
    protected $fillable = ['id', 'titulo', 'ano', 'quilometragem', 'cor', 'ocultar'];
}
