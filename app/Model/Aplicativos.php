<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aplicativos extends Model
{
    protected $table = 'aplicativos';
    protected $fillable = [
        'id',
        'imagem',
        'titulo',
        'ocultar',
        'url',
    ];
}
