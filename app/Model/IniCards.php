<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IniCards extends Model
{
    //

    protected $table = 'inicards';
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
