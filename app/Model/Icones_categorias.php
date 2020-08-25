<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Icones_categorias extends Model
{
    //
    protected $fillable = ['id', 'nome', 'status', 'ocultar'];
    protected $table = 'icones_categorias';

    public function buscaCategoriaIcone()
    {
        $result = DB::select("SELECT categoria.nome as categoria, icones.nome, icones.dinamico,
                                           icones.link,icones.id, icones.caminho
                                           FROM icones_categorias as categoria
                                           LEFT JOIN icones
                                           ON icones.icones_categorias_id = categoria.id
                                           WHERE categoria.status = '1' and icones.ocultar = '0'");
        return $result;
    }

    public function icones()
    {
        return $this->hasMany(Icones::class, 'icones_categorias_id', 'id');
    }
}
