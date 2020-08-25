<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Acontecimentos extends Model
{
    //
    protected $table = 'acontecimentos';
    protected $fillable = ['id', 'titulo', 'descricao', 'ocultar', 'criado_por', 'ano'];
}
