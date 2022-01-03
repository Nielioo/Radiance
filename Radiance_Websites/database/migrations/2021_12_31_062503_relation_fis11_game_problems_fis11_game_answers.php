<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationFis11GameProblemsFis11GameAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_game_answers', function (Blueprint $table) {
            $table->foreign('problem_id')
                ->references('id')->on('fis11_game_problems')
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
        Schema::table('fis11_game_answers', function (Blueprint $table) {
            //
        });
    }
}
