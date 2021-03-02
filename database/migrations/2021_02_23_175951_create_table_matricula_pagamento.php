<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatriculaPagamento extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('aluno_pagamento')){
            Schema::create('aluno_pagamento', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pagameto');
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
        Schema::dropIfExists('aluno_pagamento');
    }
}
