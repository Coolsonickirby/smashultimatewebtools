<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrcUpdatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prc_updaters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("og_file_name");
            $table->string("type_of_update");
            $table->string("modded_file_name");
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
        Schema::dropIfExists('prc_updaters');
    }
}
