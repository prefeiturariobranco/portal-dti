<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Contadores_painel extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'usuarios_id', 'ip', 'data_criacao'];
    protected $table = 'contadores_painel';

    public function users()
    {
        return $this->hasOne(Usuarios::class, 'usuarios_id', 'id');
    }
}
