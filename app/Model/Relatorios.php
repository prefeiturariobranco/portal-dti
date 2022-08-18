<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Relatorios extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'relatorios';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
