<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniInstrutores extends Model
{
    //

    protected $table = 'iniinstrutores';
    protected $fillable = [
        'id',
        'name',
        'email',
        'funcao',
        'redefacebook',
        'redetwitter',
        'redelinkedin',
        'redeinstagram',
        'created_at',
        'updated_at',
    ];

    // public funciton ca(){

    // }
}
