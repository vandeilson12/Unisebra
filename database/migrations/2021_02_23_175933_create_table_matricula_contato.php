<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatriculaContato extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_contato')){
            Schema::create('aluno_contato', function (Blueprint $table) {
                $table->increments('id');
                $table->string('tel1');
                $table->string('tel2');
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
        Schema::dropIfExists('aluno_contato');
    }
}
