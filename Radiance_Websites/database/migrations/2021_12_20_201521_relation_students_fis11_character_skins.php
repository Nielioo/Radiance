<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationStudentsFis11CharacterSkins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_students_character_skins', function (Blueprint $table) {
            $table->foreign('student_id')
			->references('id')->on('students')
			->onDelete('cascade')
			->onUpdate('cascade');

			$table->foreign('skin_id')
			->references('id')->on('fis11_character_skins')
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
        Schema::table('fis11_students_character_skins', function (Blueprint $table) {
            //
        });
    }
}
