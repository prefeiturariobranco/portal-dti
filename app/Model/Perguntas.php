<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    //
    protected $table = 'perguntas';
    protected $fillable = ['id', 'titulo', 'conteudo', 'ocultar', 'criado_por'];
}
