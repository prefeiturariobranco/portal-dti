<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Planejamentos_Categorias extends Model
{
    //
    protected $table = 'planejamentos_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
