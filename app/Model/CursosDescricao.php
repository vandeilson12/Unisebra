<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\CursosModel;

class CursosDescricao extends Model
{
    //
    protected $table = 'descricao';
    protected $fillable = [
        'id',
        'id_curso',
        'icon',
        'descricao',
        'created_at',
        'updat'
    ];


    public function cursos(){
        return $this->hasMany('App\Model\CursosModel','descricao_id','id_curso');
        
    }
}
