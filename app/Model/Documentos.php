<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Documentos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'documentos';
    protected $fillable = ['id', 'titulo', 'descricao', 'valor', 'data_inicio', 'data_fim', 'ocultar', 'criado_por', 'documentos_categorias_id'];

    public function documentosArquivos(){
        return $this->hasMany(Documentos_arquivos::class, 'documentos_id', 'id');
    }

    public function documentosCategoria(){
        return $this->belongsTo(Documentos_categorias::class, 'documentos_categorias_id', 'id');
    }

}
