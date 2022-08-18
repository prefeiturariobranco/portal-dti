<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Contracts\Auditable;

class Icones extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $fillable = [
        'id',
        'dinamico',
        'nome',
        'subtitulo',
        'caminho',
        'link',
        'ocultar',
        'icones_categorias_id'
    ];
    protected $table = 'icones';

    public function buscar(){
        $result = DB::select("SELECT categoria.nome as categoria, icones.nome, icones.dinamico,
                                           icones.link,icones.id, icones.caminho
                                           FROM icones_categorias as categoria
                                           LEFT JOIN icones
                                           ON icones.icones_categorias_id = categoria.id
                                           WHERE categoria.status = '1' and icones.ocultar = '0'");
        return $result;
    }

    public function iconesCategoria(){
        return $this->belongsTo(Icones_categorias::class, 'icones_categorias_id', 'id');
    }
}
