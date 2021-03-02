<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniPerguntas extends Model
{
    //

    protected $table = 'iniperguntas';
    protected $fillable = [
        'id',
        'titulo',
        'pergunta',
        'created_at',
        'updated_at',
    ];


    // public function aluno(){
    //     return $this->hasMany(User::class);
    // }
}
