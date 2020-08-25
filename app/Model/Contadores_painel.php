<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contadores_painel extends Model
{
    //
    protected $table = 'contadores_painel';
    protected $fillable = ['id', 'usuarios_id', 'ip', 'data_criacao'];

}
