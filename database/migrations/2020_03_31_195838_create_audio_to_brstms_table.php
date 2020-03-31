<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioToBrstmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_to_brstms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("filename")->nullable();
            $table->string("start_loop")->nullable();
            $table->string("end_loop")->nullable();
            $table->string("stage")->nullable();
            $table->string("hz")->nullable();
            $table->longText("log")->nullable();
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
        Schema::dropIfExists('audio_to_brstms');
    }
}
