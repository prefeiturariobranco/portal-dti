<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_participante'
    ];
}
