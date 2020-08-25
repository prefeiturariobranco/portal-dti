<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Documentos_categorias extends Model
{
    //
    protected $table = 'documentos_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
