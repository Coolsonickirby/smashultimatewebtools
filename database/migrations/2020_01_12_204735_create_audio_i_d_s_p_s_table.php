<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioIDSPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_i_d_s_p_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("filename")->nullable();
            $table->string("startloop")->nullable();
            $table->string("endloop")->nullable();
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
        Schema::dropIfExists('audio_i_d_s_p_s');
    }
}
