<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis11StudentsCharacterSkinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis11_students_character_skins', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('student_id')->unsigned();
			$table->bigInteger('skin_id')->unsigned();
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
        Schema::dropIfExists('fis11_student_character_skins');
    }
}
