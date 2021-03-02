<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\CursosPreco;
use App\Model\CursosModulos;
use App\Model\CursosDescricao;

class CursosModel extends Model
{
    //
    
    protected $table = 'cursos';
    protected $fillable = [
        'id',
        'nome',
        'modulos_id',
        'descricao_id',
        'preco_id',
        'modalidade',
        'detalhes',
        'publico_alvo',
        'img',
        'ch',
        'cod_curso',
    ];


    public function aluno(){
        return $this->hasMany(User::class);
    }

    // Relacionamento
    public function cursospreco(){
        return $this->hasMany('App\Model\CursosPreco','id_curso','preco_id');
        
    }


    public function cursosmodulos(){
        return $this->hasMany('App\Model\CursosModulos','id_curso','modulos_id');
        
    }

    public function cursosdescricao(){
        return $this->hasMany('App\Model\CursosDescricao','id_curso','descricao_id');
        
    }
}
