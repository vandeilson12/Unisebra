<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDescriaoPrecocursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(!Schema::hasTable('preco_cursos')){
            Schema::create('preco_cursos', function (Blueprint $table) {
                $table->increments('id');
                $table->text('total');
                $table->text('parcelas');
                $table->text('vezes');
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
        //
        Schema::dropIfExists('preco_cursos');
    }
}
