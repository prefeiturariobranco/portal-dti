<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Postagens extends Model
{
    //
    protected $fillable = ['id', 'imagem', 'titulo', 'conteudo', 'criado_por', 'ocultar', 'created_at'];
    protected $table = 'postagens';
}
