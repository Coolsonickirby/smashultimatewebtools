<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipToNus3audiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_to_nus3audios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nus3Filename")->nullable();
            $table->string("zipFilename")->nullable();
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
        Schema::dropIfExists('zip_to_nus3audios');
    }
}
