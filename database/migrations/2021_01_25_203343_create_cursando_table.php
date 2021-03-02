<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursandoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('cursando')){
            Schema::create('cursando', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('usuario_id');
                $table->unsignedInteger('curso_id');
                $table->text('detalhes')->nullable();
                $table->text('descricao');
                $table->text('status');
                $table->text('cod_curso');
                $table->timestamps();
            });

            Schema::create('cursando', function (Blueprint $table) {
                $table->foreign('usuario_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

                $table->foreign('curso_id')
                    ->references('id')
                    ->on('cursos')
                    ->onDelete('cascade');
    
                $table->text('status')->enum('ATIVO', 'DESATIVO', 'PARSIVO')->default('PROGRESS');
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
        Schema::dropIfExists('cursando');
    }
}
