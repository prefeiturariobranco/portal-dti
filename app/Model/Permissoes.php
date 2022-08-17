<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Permissoes extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'permissoes';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
