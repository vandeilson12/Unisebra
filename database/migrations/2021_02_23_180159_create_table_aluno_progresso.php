<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlunoProgresso extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_progresso')){
            Schema::create('aluno_progresso', function (Blueprint $table) {
                $table->increments('id');
                $table->string('curso');
                $table->string('progresso');
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
        Schema::dropIfExists('aluno_progresso');
    }
}
