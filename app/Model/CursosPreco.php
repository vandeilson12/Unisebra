<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\CursosModel;

class CursosPreco extends Model
{
    //
    protected $table = 'preco_cursos';
    protected $fillable = [
        'id',
        'id_curso',
        'total',
        'parcelas',
        'vezes',
        'created_at',
        'updated_at',
    ];


    public function cursos(){
        return $this->hasMany('App\Model\CursosModel','preco_id','id_curso');
    }
}
