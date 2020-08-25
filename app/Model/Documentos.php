<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
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
