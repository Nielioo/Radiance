<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis11StudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis11_students', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('student_id')->unsigned()->unique();
			$table->string('profile_picture')->nullable();
			$table->enum('is_login', ['0', '1'])->default('0');
			$table->enum('is_active', ['0', '1'])->default('1');
			$table->enum('role', ['admin', 'user'])->default('user');
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
        Schema::dropIfExists('fis11_students');
    }
}
