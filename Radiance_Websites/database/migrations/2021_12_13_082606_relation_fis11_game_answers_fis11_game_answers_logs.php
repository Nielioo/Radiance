<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationFis11GameAnswersFis11GameAnswersLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_game_answers_logs', function (Blueprint $table) {
            $table->foreign('answer_id')
				->references('id')->on('fis11_game_answers')
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
        Schema::table('fis11_game_answers_logs', function (Blueprint $table) {
            //
        });
    }
}
