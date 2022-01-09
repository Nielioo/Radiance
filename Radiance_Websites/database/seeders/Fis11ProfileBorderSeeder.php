<?php

namespace Database\Seeders;

use App\Models\Fis11ProfileBorder;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11ProfileBorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $border1 = Fis11ProfileBorder::create([
			'name' => 'Default Border',
			'description' => 'Basic profile border',
			'border' => '/img/profileBorders/border_default.png',
		]);


		DB::table('fis11_profile_borders_logs')->insert([
			'border_id' => $border1->id,
			'action' => 'create',
			'path' => 'database\seeders\Fis11GameLevelSeeder',
			'description' => 'Create default border',
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);
    }
}
