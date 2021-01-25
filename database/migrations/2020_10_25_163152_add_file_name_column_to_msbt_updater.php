<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFileNameColumnToMsbtUpdater extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('msbt_updaters', function (Blueprint $table) {
            $table->string("og_file_name");
            $table->string("modded_file_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('msbt_updaters', function (Blueprint $table) {
            //
        });
    }
}
