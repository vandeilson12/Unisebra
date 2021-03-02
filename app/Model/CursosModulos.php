<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\CursosModel;

class CursosModulos extends Model
{
    //
    protected $table = 'modulos';
    protected $fillable = [
        'id',
        'id_curso',
        'modulo',
        'content',
        'created_at',
        'updated_at',
    ];


    public function cursos(){
        return $this->hasMany('App\Model\CursosModel','modulos_id','id_curso');
    }
}
