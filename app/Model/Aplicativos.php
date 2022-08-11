<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Aplicativos extends Model implements Auditable
{
    use AuditableTrait;

    protected $table = 'aplicativos';
    protected $fillable = [
        'id',
        'imagem',
        'titulo',
        'ocultar',
        'url',
    ];
}
