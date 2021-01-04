<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('horometer');
            $table->string('fl');
            $table->string('bl');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('user_id')->unique();
            
            $table->foreign('state_id')->references('id')
            ->on('states')
            ->onDelete('cascade');
            
            $table->foreign('user_id')->references('id')
            ->on('users')
            ->onDelete('cascade');
            
            
            $table->timestamps();
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
