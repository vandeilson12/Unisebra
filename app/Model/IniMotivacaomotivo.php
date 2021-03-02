<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniMotivacaomotivo extends Model
{
    //

    protected $table = 'inimotivacaomotivo';
    protected $fillable = [
        'id',
        'motivo',
        'content',
    ];


    // public function aluno(){
    //     return $this->hasMany(User::class);
    // }
}
