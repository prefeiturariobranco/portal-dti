<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infra_historico_fibra extends Model
{
    //
    protected $table = 'infra_historico_fibras';
    protected $fillable = ['id', 'titulo', 'ano', 'quilometragem', 'cor', 'ocultar'];
}
