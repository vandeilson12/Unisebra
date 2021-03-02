<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatriculaEndereco extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_endereco')){
            Schema::create('aluno_endereco', function (Blueprint $table) {
                $table->increments('id');
                $table->string('cep');
                $table->string('rua');
                $table->string('casa');
                $table->string('bairro');
                $table->string('cidade');
                $table->string('estado');                
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
