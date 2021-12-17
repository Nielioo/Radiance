<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationFis11GameTimeChallengeHistoriesFis11GameTimeChallengeHistoriesLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_game_time_challenge_histories_logs', function (Blueprint $table) {
            $table->foreign('game_id')
				->references('id')->on('fis11_game_time_challenge_histories')
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
        Schema::table('fis11_game_time_challenge_histories_logs', function (Blueprint $table) {
            //
        });
    }
}
