<?php

namespace Database\Seeders;

use App\Models\Fis11GameStage;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11GameStageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Request $request)
	{
		$themes = array(
			'bridge',
			'resto',
			'forest',
			'forest',
			'forest',
			'forest',
			'in_town',
		);

		for ($i = 0; $i < 7; $i++) {
			$stage = Fis11GameStage::create([
				'stage' => $i + 1,
				'total_level' => '10',
				'total_star' => '30',
				'theme' => $themes[$i],
			]);

			DB::table('fis11_game_stages_logs')->insert([
				'stage_id' => $stage->id,
				'action' => 'create',
				'path' => 'database\seeders\Fis11GameStageSeeder',
				'description' => 'Create stage ' . strval($i + 1),
				'ip_address' => $request->ip(),
				'created_at' => now(),
				'updated_at' => now(),
			]);
		}
	}
}
