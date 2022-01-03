<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis11GameStoryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis11_game_story_histories', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('student_id')->unsigned();
			$table->bigInteger('level_id')->unsigned();
			$table->integer('star')->default(0);
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
        Schema::dropIfExists('fis11_game_story_histories');
    }
}
