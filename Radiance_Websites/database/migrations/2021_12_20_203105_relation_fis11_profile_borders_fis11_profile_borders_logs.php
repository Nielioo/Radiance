<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationFis11ProfileBordersFis11ProfileBordersLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_profile_borders_logs', function (Blueprint $table) {
            $table->foreign('border_id')
			->references('id')->on('fis11_profile_borders')
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
        Schema::table('fis11_profile_borders_logs', function (Blueprint $table) {
            //
        });
    }
}
