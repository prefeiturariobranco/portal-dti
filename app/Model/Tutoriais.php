<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tutoriais extends Model
{
    //
    protected $table = 'tutoriais';
    protected $fillable = [
        'id',
        'imagem',
        'titulo',
        'conteudo',
        'ocultar',
        'criado_por',
        'video',
        'imagem1',
        'imagem2',
        'imagem3',
        'imagem4',
        'imagem5',
        ];
}
