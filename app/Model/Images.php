<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Images extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'images';
    protected $fillable = [
        'nome',
        'caminho'
    ];
}
