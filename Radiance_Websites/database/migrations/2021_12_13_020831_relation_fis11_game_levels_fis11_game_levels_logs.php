<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationFis11GameLevelsFis11GameLevelsLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_game_levels_logs', function (Blueprint $table) {
            $table->foreign('level_id')
				->references('id')->on('fis11_game_levels')
				->onDelete('cascade')
				->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fis11_game_levels_logs', function (Blueprint $table) {
            //
        });
    }
}
