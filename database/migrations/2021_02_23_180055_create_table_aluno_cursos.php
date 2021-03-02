<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlunoCursos extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_cursos')){
            Schema::create('aluno_cursos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('curso');
                 $table->unsignedInteger('progresso_id');
                $table->string('cod');                
                $table->timestamps();
            });



            Schema::table('aluno_cursos', function (Blueprint $table) {
                $table->foreign('progresso_id')
                    ->references('id')
                    ->on('aluno_progresso')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('aluno_cursos');
    }
}
