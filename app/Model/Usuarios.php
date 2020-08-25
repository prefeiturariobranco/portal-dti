<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = "usuarios";
    protected $fillable = [
        'id', 'nome', 'login', 'senha', 'ocultar',
        'imagem', 'data_exclusao', 'cargos_id',
        'departamentos_id', 'telefone_sala', 'telefone_pessoal',
        'email', 'data_admissao', 'data_exoneracao', 'data_nascimento',
        'criado_por', 'status'
    ];

    public function departamentos()
    {
        return $this->belongsTo(Departamentos::class, 'departamentos_id', 'id');
    }

    public function cargos()
    {
        return $this->belongsTo(Cargos::class, 'cargos_id', 'id');
    }
}
