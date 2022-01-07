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

            //-------------------------------------------------------

			//stage 2 level 1
			'2,5 ms^(–2)',
			'5,0 ms^(–2)',
			'10,0 ms^(–2)', // True
			'20,0 ms^(–2)',
			//stage 2 level 2
			'3 × 10^(–7) kg m^2 s^(-1)',
			'9 × 10^(–7) kg m^2 s^(-1)',
			'1,6 × 10^(–6) kg m^2 s^(-1)',
			'18 x 10^(–7) kg m^2 s^(-1)', //True
			//stage 2 level 3
			'tetap',
			'menjadi 1/2 kali semula', //True
			'menjadi 3/4 kali semula',
			'menjadi 2 kali semula',
			//stage 2 level 4
			'(7/20)MR^2',
			'(8/20)MR^2',
			'(9/20)MR^2',
			'(12/20)MR^2', //True
			//stage 2 level 5
			'6 Nm',
			'0,6 Nm',
			'0,06 Nm', //True
			'0,006 Nm',
			//stage 2 level 6
			'kg m^2', //True
			'kg m',
			'kg/m^2',
			'kg m^3',
			//stage 2 level 7
			'5 kg.m^2',
			'7 kg.m^2',
			'9 kg.m^2',
			'11 kg.m^2', //True
			//stage 2 level 8
			'19 x 10^(-3) kgm^2',
			'16 x 10^(-3) kgm^2',
			'17 x 10^(-3) kgm^2',
			'18 x 10^(-3) kgm^2', //True
			//stage 2 level 9
			'2,72 kg.m^2', //True
			'2,76 kg.m^2',
			'2,70 kg.m^2',
			'2,78 kg.m^2',
			//stage 2 level 10
			'M^2.R.(1/2)w',
			'M.R^2.(1/2)w', //True
			'M.R.(1/2)w',
			'M.R^2.(1/2)',

            //----------------------------------------------------------

			//stage 3 level 1
			'0,01 m',
			'0,001 m',
			'0,1 m', //True
			'1 m',
			//stage 3 level 2
			'Hukum Hooke',
			'Modulus Elastisitas',
			'Tegangan', //True
			'Regangan',
			//stage 3 level 3
			'10 N/m^2',
			'100 N/m^2', //True
			'1 N/m^2',
			'1000 N/m^2',
			//stage 3 level 4
			'Hukum Hooke',
			'Modulus Elastisitas',
			'Tegangan',
			'Regangan', //True
			//stage 3 level 5
			'5 N/m',
			'50 N/m',
			'500 N/m',
			'5000 N/m', //True
			//stage 3 level 6
			'Hukum Hooke',
			'Modulus Elastisitas', //True
			'Tegangan',
			'Regangan',
			//stage 3 level 7
			'4,0 N', // True
			'3,2 N',
			'2.4 N',
			'1,6 N',
			//stage 3 level 8
			'9,8 m s', //True
			'8,3 m s',
			'7,5 m s',
			'10,4 m s',
			//stage 3 level 9
			'4/1', //True
			'6/7',
			'5/2',
			'8/3',
			//stage 3 level 10
			'0,46 cm',
			'0,34 cm',
			'0,25 cm', //True
			'0,84 cm',

            //------------------------------------------------------

			//stage 4 level 1
			'Gaya',
			'Tekanan', //True
			'Hukum Pascal',
			'Massa',
			//stage 4 level 2
			'rasio gaya yang diberikan dibagi gaya yang keluar',
			'rasio gaya yang keluar dikali gaya yang diberikan',
			'rasio gaya yang keluar dibagi gaya yang diberikan', //True
			'rasio gaya yang diberikan dikali gaya yang keluar',
			//stage 4 level 3
			'20 cm', //True
			'32 cm',
			'14 cm',
			'11 cm',
			//stage 4 level 4
			'15 N',
			'12.5 N', //True
			'10 N',
			'7 N',
			//stage 4 level 5
			'125,44 N', //True
			'132,44 N',
			'127,44 N',
			'130,44 N',
			//stage 4 level 6
			'41 N',
			'40 N',
			'51 N',
			'50 N', //True
			//stage 4 level 7
			'439,15 N',
			'440 N',
			'439,5 N', //True
			'439,4 N',
			//stage 4 level 8
			'1 cm',
			'1,1 cm',
			'11,1 cm',
			'1,11 cm', //True
			//stage 4 level 9
			'1,54 N', //True
			'1,55 N',
			'1,45 N',
			'1,5 N',
			//stage 4 level 10
			'6,25 N', //True
			'625 N',
			'62,5 N',
			'62 N',

            //-----------------------------------------------

			//stage 5 level 1
			'113°', //True
			'45°',
			'318°',
			'319°',
			//stage 5 level 2
			'Uap',
			'Api',
			'Kalor', //True
			'Embun',
			//stage 5 level 3
			'20°C',
			'45°C',
			'50°C',
			'75°C', //True
			//stage 5 level 4
			'100 cm', //True
			'101,5 cm',
			'102 cm',
			'102,5 cm',
			//stage 5 level 5
			'0,12 mm', //True
			'0,24 mm',
			'0,60 mm',
			'0,62 mm',
			//stage 5 level 6
			'Termometer', //True
			'Barometer',
			'Hydrometer',
			'Anemometer',
			//stage 5 level 7
			'4',
			'1 dan 2', //True
			'1, 2, dan 3',
			'1 dan 3',
			//stage 5 level 8
			'35°−45° Celsius',
			'30°−40° Celsius',
			'20°−50° Celsius',
			'35°−42° Celsius', //True
			//stage 5 level 9
			'a',
			'b',
			'c',
			'd',
			//stage 5 level 10
			'6,10',
			'6,20',
			'6,25',
			'6,30', //True

            //---------------------------------------------------

			//stage 6 level 1
			'Difraksi',
			'Longitudinal', //True
			'Polarisasi',
			'Interferensi',
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

            //---------------------------------------------------

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
			3, 4, 2, 4, 3, 1, 4, 4, 1, 2,
			3, 3, 2, 4, 4, 2, 1, 1, 1, 3,
			2, 3, 1, 2, 1, 4, 3, 4, 1, 1,
			1, 3, 4, 1, 1, 1, 2, 4, 1, 4,
			2, 1, 1, 1, 1, 1, 1, 1, 1, 1,
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
