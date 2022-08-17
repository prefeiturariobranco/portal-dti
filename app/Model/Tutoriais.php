<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Tutoriais extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
