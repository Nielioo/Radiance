<?php

namespace Database\Seeders;

use App\Models\Fis11GameAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Fis11GameAnswerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Request $request)
	{
		$answers = array(
			//stage 1 level 1
			'0,75 m dari B',
			'1,5 m dari A',
			'1,6 m dari B',
			'1,6 m dari A', // True
			//stage 1 level 2
			'-1',
			'0', // True
			'1',
			'2',
			//stage 1 level 3
			'4', // True
			'6',
			'8',
			'12',
			//stage 1 level 4
			'4', // True
			'8',
			'10',
			'12',
			//stage 1 level 5
			'40',
			'55',
			'65', // True
			'70',
			//stage 1 level 6
			'Stabil',
			'Netral',
			'Labil',
			'Normal', // True
			//stage 1 level 7
			'40',
			'45',
			'50',
			'60', // True
			//stage 1 level 8
			'1/8 R',
			'1/3 R',
			'3/8 R', // True
			'4/9 R',
			//stage 1 level 9
			'1/8 t',
			'1/4 t', // True
			'1/3 t',
			'1/2 t',
			//stage 1 level 10
			'470 N',
			'490 N', // True
			'510 N',
			'590 N',
			//stage 2 level 1
			'2,5 ms^(–2)',
			'5,0 ms^(–2)',
			'10,0 ms^(–2)', // True
			'20,0 ms^(–2)',
			//stage 2 level 2
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 3
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 4
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 5
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 6
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 7
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 8
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 2 level 10
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 1
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 2
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 3
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 4
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 5
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 6
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 7
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 8
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 3 level 10
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 1
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 2
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 3
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 4
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 5
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 6
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 7
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 8
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 4 level 10
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 1
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 2
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 3
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 4
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 5
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 6
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 7
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 8
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 10
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 1
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 2
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 3
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 4
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 5
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 6
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 7
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 8
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 6 level 10
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 1
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 2
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 3
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 4
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 5
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 6
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 7
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 8
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 7 level 10
			'a',
			'b',
			'c',
			'd',
		);

		$trueAnswers = array(
			4, 2, 1, 1, 3, 4, 4, 3, 2, 2,
			3, 1, 1, 1, 1, 1, 1, 1, 1, 1,
			1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
			1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
			1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
			1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
			1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
		);

		// Insert answers to database
		for ($i = 0; $i < count($answers); $i++) {
			// Get problem ID
			$problem_id = floor($i / 4) + 1;

			// Check if correct answer
			if (($trueAnswers[$problem_id - 1] - 1) === ($i % 4)) {
				$isTrue = 1;
			} else {
				$isTrue = 0;
			}

			// Insert answers
			$answer = Fis11GameAnswer::create([
				'problem_id' => $problem_id,
				'answer' => $answers[$i],
				'isTrue' => $isTrue,
			]);

			// Create logs
			DB::table('fis11_game_answers_logs')->insert([
				'answer_id' => $answer->id,
				'action' => 'create',
				'path' => 'Database\Seeders\Fis11GameAnswerSeeder',
				'description' => 'Create answer with ID: ' . $answer->id,
				'ip_address' => $request->ip(),
				'created_at' => now(),
				'updated_at' => now(),
			]);
		}
	}
}
