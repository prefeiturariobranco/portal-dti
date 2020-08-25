<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mapas_Categorias extends Model
{
    //
    protected $table = 'mapas_categorias';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
