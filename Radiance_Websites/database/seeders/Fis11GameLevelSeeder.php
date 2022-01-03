<?php

namespace Database\Seeders;

use App\Models\Fis11GameLevel;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11GameLevelSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Request $request)
	{
		// Stages
		for ($i = 1; $i <= 7; $i++) {
			// Levels
			for ($j = 1; $j <= 10; $j++) {
				if ($j === 1) {
					$level = Fis11GameLevel::create([
						'stage_id' => $i,
						'level' => '1',
						'star' => '3',
					]);
				} else {
					$level = Fis11GameLevel::create([
						'stage_id' => $i,
						'level_requirement_id' => (($i - 1) * 10) + ($j - 1),
						'level' => $j,
						'star' => '3',
					]);
				}

				DB::table('fis11_game_levels_logs')->insert([
					'level_id' => $level->id,
					'action' => 'create',
					'path' => 'database\seeders\Fis11GameLevelSeeder',
					'description' => 'Create level ' . strval($j) . ' on stage ' . strval($i),
					'ip_address' => $request->ip(),
					'created_at' => now(),
					'updated_at' => now(),
				]);
			}
		}
	}
}
