<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInimotivacaomotivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('inimotivacaomotivo')){
            Schema::create('inimotivacaomotivo', function (Blueprint $table) {
                $table->increments('id');
                $table->text('motivo')->nullable();
                $table->text('titulo')->nullable();
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
        Schema::dropIfExists('inimotivacaomotivo');
    }
}
