<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationFis11CharacterSkinsFis11CharacterSkinsLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fis11_character_skins_logs', function (Blueprint $table) {
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
        Schema::table('fis11_character_skins_logs', function (Blueprint $table) {
            //
        });
    }
}
