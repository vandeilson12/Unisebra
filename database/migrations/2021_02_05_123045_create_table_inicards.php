<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInicards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('inicards')){
            Schema::create('inicards', function (Blueprint $table) {
                $table->increments('id');
                $table->text('titulo')->nullable();
                $table->text('content')->nullable();
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
        Schema::dropIfExists('inicialcards');
    }
}
