<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlunoMensalidade extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_mensalidade')){
            Schema::create('aluno_mensalidade', function (Blueprint $table) {
                $table->increments('id');
                $table->string('mensalidade');
                $table->string('parcelar');
                $table->string('vezes');
                $table->string('cod');                
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
