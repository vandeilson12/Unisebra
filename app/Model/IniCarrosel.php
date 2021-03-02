<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniCarrosel extends Model
{
    //

    protected $table = 'inicialcarrosel';
    protected $fillable = [
        'id',
        'titulo',
        'content',
        'created_at',
        'updated_at',
    ];


    // public function aluno(){
    //     return $this->hasMany(User::class);
    // }
}
