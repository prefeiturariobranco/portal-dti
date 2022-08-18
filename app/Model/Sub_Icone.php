<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Contracts\Auditable;

class Sub_Icone extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'sub_icones';
    protected $fillable = ['id', 'nome', 'caminho', 'link', 'ocultar', 'icones_id'];

    public function subIcones($id){

        /*$resultSql = Sql("SELECT icones.dinamico, sub_icone.nome, sub_icone.caminho, sub_icone.link, icones.nome as categoria FROM sub_icone
        RIGHT JOIN icones
        ON sub_icone.icones_id = icones.id
        WHERE sub_icone.ocultar = 0 and sub_icone.icones_id = " . $request->id);
        */
        $subIcones = DB::table('sub_icones')->rightJoin('icones', 'icones.id', '=', 'sub_icones.icones_id')->
        select(
            'icones.dinamico', 'sub_icones.nome', 'sub_icones.caminho', 'sub_icones.link', 'icones.nome as categoria'
        )->where([
            'sub_icones.ocultar' => 0,
            'sub_icones.icones_id' => $id
        ])->get();
        return $subIcones;;
    }
}
