<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Relatorios extends Model
{
    //
    protected $table = 'relatorios';
    protected $fillable = ['id', 'nome', 'ocultar'];
}
