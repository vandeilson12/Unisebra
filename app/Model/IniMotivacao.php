<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniMotivacao extends Model
{
    //

    protected $table = 'inimotivacao';
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
