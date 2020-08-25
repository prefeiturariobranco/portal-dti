<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Investimentos extends Model
{
    //
    protected $table = 'investimentos';
    protected $fillable = ['id', 'nome', 'valor', 'ocultar', 'investimentos_categorias_id', 'criado_por', 'cor'];
}
