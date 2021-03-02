<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInimotivacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('inimotivacao')){
            Schema::create('inimotivacao', function (Blueprint $table) {
                $table->increments('id');
                // $table->unsignedInteger('motivo_id');
                $table->text('titulo')->nullable();
                $table->text('content')->nullable();
                $table->text('img')->nullable();
                $table->timestamps();
            });


            // Schema::create('inimotivacao', function (Blueprint $table) {
            //     $table->foreign('motivo_id')
            //         ->references('id')
            //         ->on('inimotivacaomotivo')
            //         ->onDelete('cascade');
            // });
            
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
        Schema::dropIfExists('inimotivacao');
    }
}
