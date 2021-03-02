<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIniinstrotores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(!Schema::hasTable('iniinstrutores')){
            Schema::create('iniinstrutores', function (Blueprint $table) {
                $table->increments('id');
                $table->text('name')->nullable();
                $table->text('email')->nullable();
                $table->text('img')->nullable();
                $table->text('funcao')->nullable();
                $table->text('redefacebook')->nullable();
                $table->text('redetwitter')->nullable();
                $table->text('redelinkedin')->nullable();
                $table->text('redelinstagram')->nullable();
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
        Schema::dropIfExists('iniinstrutores');
    }
}
