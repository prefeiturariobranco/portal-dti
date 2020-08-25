<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Planejamentos extends Model
{
    //
    protected $table = 'planejamentos';
    protected $fillable = ['id', 'titulo', 'descricao', 'data_entrega', 'ocultar', 'planejamentos_categorias_id', 'criado_por', 'responsavel'];

    public function planejamentosCategorias(){
        return $this->belongsTo(Planejamentos_Categorias::class, 'planejamentos_categorias_id', 'id');
    }
}
