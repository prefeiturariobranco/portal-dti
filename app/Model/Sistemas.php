<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Sistemas extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'sistemas';
    protected $fillable = [
        'nome_sistema',
        'ocultar'
    ];
}
