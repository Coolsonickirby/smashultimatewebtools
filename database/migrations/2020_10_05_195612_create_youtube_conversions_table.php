<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubeConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtube_conversions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("video_title")->nullable();
            $table->string("video_id")->nullable();
            $table->string("loop_start")->nullable();
            $table->string("loop_end")->nullable();
            $table->string("log")->nullable();
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
        Schema::dropIfExists('youtube_conversions');
    }
}
