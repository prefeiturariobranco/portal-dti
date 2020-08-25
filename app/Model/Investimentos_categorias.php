<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Investimentos_categorias extends Model
{
    //
    protected $table = 'investimentos_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
