<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIniperguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('iniperguntas')){
            Schema::create('iniperguntas', function (Blueprint $table) {
                $table->increments('id');
                $table->text('titulo')->nullable();
                $table->text('pergunta')->nullable();
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
        Schema::dropIfExists('iniperguntas');
    }
}
