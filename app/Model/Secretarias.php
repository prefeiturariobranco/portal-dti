<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Secretarias extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $fillable = ['id', 'nome', 'sigla'];
    protected $table = 'secretarias';

    public function tiLocal(){
        return $this->hasMany(Ti_Local::class, 'secretaria_id', 'id');
    }
}
