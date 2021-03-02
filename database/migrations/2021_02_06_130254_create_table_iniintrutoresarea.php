<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIniintrutoresarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('iniinstrutoresarea')){
            Schema::create('iniinstrutoresarea', function (Blueprint $table) {
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
        Schema::dropIfExists('iniinstrutoresarea');
    }
}
