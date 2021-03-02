<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniInstrutoresArea extends Model
{
    //

    protected $table = 'iniinstrutoresarea';
    protected $fillable = [
        'id',
        'titulo',
        'content',
        'created_at',
        'updated_at',
    ];

}
