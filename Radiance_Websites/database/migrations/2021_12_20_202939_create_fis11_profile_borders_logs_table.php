<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis11ProfileBordersLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis11_profile_borders_logs', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('border_id')->unsigned();
			$table->string('action');
			$table->string('path');
			$table->text('description');
			$table->string('ip_address');
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
        Schema::dropIfExists('fis11_profile_borders_logs');
    }
}
