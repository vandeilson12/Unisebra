<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInicarrosel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(!Schema::hasTable('inicialcarrosel')){
            Schema::create('inicialcarrosel', function (Blueprint $table) {
                $table->increments('id');
                $table->text('titulo')->nullable();
                $table->text('content');
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
        Schema::dropIfExists('inicialcarrosel');
    }
}
