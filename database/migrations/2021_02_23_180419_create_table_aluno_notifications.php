<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlunoNotifications extends Migration
{


    public function up()
    {

        if(!Schema::hasTable('aluno_notifications')){
        Schema::create('aluno_notifications', function (Blueprint $table) {
                $table->increments('id');
                $table->string('type');
                $table->morphs('notifiable');
                $table->text('data');
                $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('aluno_notifications');
    }
}
