<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('cursos')){
            Schema::create('cursos', function (Blueprint $table) {
                $table->increments('id');                
                $table->text('nome')->nullable();
                $table->unsignedBigInteger('modulos_id')->nullable();
                $table->unsignedBigInteger('descricao_id')->nullable();
                $table->unsignedBigInteger('preco_id')->nullable();
                $table->text('modalidade')->nullable();
                $table->text('detalhes')->nullable();
                $table->text('publico_alvo');
                $table->text('ch');
                $table->text('cod_curso')->nullable();
                $table->text('img')->nullable();
                $table->timestamps();
            });


            Schema::table('cursos', function (Blueprint $table) {

                $table->foreign('modulos_id')
                        ->references('id')
                        ->on('modulos_cursos')
                        ->onDelete('cascade');

                $table->foreign('descricao_id')
                        ->references('id')
                        ->on('descricao_cursos')
                        ->onDelete('cascade');

                $table->foreign('preco_id')
                        ->references('id')
                        ->on('preco_cursos')
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
        Schema::dropIfExists('cursos');
    }
}
