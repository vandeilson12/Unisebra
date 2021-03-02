<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlunoMatricula extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_matricula')){
            Schema::create('aluno_matricula', function (Blueprint $table) {
                $table->increments('id');
                $table->string('cpf');
                $table->string('email')->unique();
                $table->string('nascimento');
                $table->string('genero');
                $table->string('escolaridade');
                $table->string('estado_civil');
                $table->string('cod_aluno');                
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_matricula');
    }
}
