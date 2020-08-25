<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Secretarias extends Model
{
    //
    protected $fillable = ['id', 'nome', 'sigla'];
    protected $table = 'secretarias';

    public function tiLocal(){
        return $this->hasMany(Ti_Local::class, 'secretaria_id', 'id');
    }
}
