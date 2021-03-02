<?php

namespace App\Model\Aluno;

use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
    //

    protected $table = 'aluno';
    protected $fillable = [
        'id',
        'name',
        'email',
        'img',
        'remember_token',
    ];

    public $timestamps = false;


    // public function aluno_users(){
    //     return $this->hasMany('App\Model\CursosModel','','');
    // }
    
}
