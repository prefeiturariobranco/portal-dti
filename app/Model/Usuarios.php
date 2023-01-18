<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Audit;

class Usuarios extends Authenticatable
{
    //
    protected $table = "usuarios";
    protected $hidden = ['senha', 'remember_token'];
    protected $primaryKey = 'id';
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

    public function reuniao()
    {
        return $this->hasMany(Usuarios::class, 'usuario_id', 'id');
    }
}
