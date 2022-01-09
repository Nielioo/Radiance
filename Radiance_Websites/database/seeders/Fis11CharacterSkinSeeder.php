<?php

namespace Database\Seeders;

use App\Models\Fis11CharacterSkin;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11CharacterSkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $skin1 = Fis11CharacterSkin::create([
            'name' => 'Default Rae',
            'description' => 'Default Rae Skin',
            'skin' => '/img/mascots/rae/rae_default.png',
        ]);

        DB::table('fis11_character_skins_logs')->insert([
            'skin_id' => $skin1->id,
            'action' => 'create',
            'path' => 'database\seeders\Fis11CharacterSkinSeeder',
            'description' => 'Create skin with id ' . $skin1->id,
            'ip_address' => $request->ip(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $skin2 = Fis11CharacterSkin::create([
            'name' => 'Valentine Rae',
            'description' => 'Valentine Rae Skin',
            'skin' => '/img/mascots/rae/rae_valentine.png',
        ]);

        DB::table('fis11_character_skins_logs')->insert([
            'skin_id' => $skin2->id,
            'action' => 'create',
            'path' => 'database\seeders\Fis11CharacterSkinSeeder',
            'description' => 'Create skin with id ' . $skin2->id,
            'ip_address' => $request->ip(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $skin3 = Fis11CharacterSkin::create([
            'name' => 'Christmas Rae',
            'description' => 'Christmas Rae Skin',
            'skin' => '/img/mascots/rae/rae_christmas.png',
        ]);

        DB::table('fis11_character_skins_logs')->insert([
            'skin_id' => $skin3->id,
            'action' => 'create',
            'path' => 'database\seeders\Fis11CharacterSkinSeeder',
            'description' => 'Create skin with id ' . $skin3->id,
            'ip_address' => $request->ip(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
