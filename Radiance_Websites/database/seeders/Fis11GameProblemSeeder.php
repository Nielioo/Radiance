<?php

namespace Database\Seeders;

use App\Models\Fis11GameProblem;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11GameProblemSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Request $request)
	{
		$questions = array(
			//stage 1 level 1
			'Seseorang memikul beban dengan tongkat AB homogen dengan panjang 2 m. Beban Diujung A = 100 N dan di B = 400 N. Jika batang AB setimbang, maka bahu orang itu harus diletakkan...',
			//stage 1 level 2
			'Keseimbangan benda tegar adalah kondisi dimana momentum benda tegar sama dengan...',
			//stage 1 level 3
			'Kotak A (10 kg) dan B (20 kg) diletakkan di atas papan kayu. Panjang papan = 10 meter. Jika kotak B diletakkan 2 meter dari titik tumpuh, pada jarak berapa dari titik tumpuh kotak A harus diletakkan sehingga papan tidak berotasi ? (g = 10 m/s2)',
			//stage 1 level 4
			'Diketahui terdapat dua buah kotak dengan massa tertentu. Kotak A bermassa 20 kg dan Kotak B bermassa 40 kg diletakkan di atas sebuah papan kayu. Panjang papan tersebut adalah sebesar 10 meter. Apabila kotak B diletakkan 2 meter dari titik tumpuh, pada jarak berapa dari titik tumpuh kotak A harus diletakkan sehingga papan tidak berotasi ? (g = 10 m/s2)',
			//stage 1 level 5
			'Diketahui sebuah batang homogen XY memiliki panjang 80 cm dengan berat 18N. Diujung batang tersebut diberi beban seberat 30 N. Untuk menahan batang, sebuah tali diikat antara ujung Y dengan titik Z. Jika diketahui jarak YZ adalah 60 cm, maka berapakah tegangan pada tali?',
			//stage 1 level 6
			'Dari pilihan berikut, yang bukan termasuk jenis-jenis kesetimbangan benda tegar adalah',
			//stage 1 level 7
			'Sebuah bola besi dengan massa 6 kg diikat oleh dua buah tali dengan sudut masing-masing 30˚. Jika gravitasi = 9,8 m/s², hitunglah tegangan pada kedua tali tersebut!',
			//stage 1 level 8
			'Titik berat setengah bola pejal adalah',
			//stage 1 level 9
			'Titik berat kerucut pejal adalah',
			//stage 1 level 10
			'Sebuah balok dengan massa 50 kg digantung pada dua utas tali yang bersambungan. Jika percepatan gravitasi 9,8 m/s2, tentukan besartegangan tali horizontalnya!',
			//stage 2 level 1
			'Sebuah katrol cakram pejal massanya 8 kg dan berjari-jari 10 cm pada tepinya dililitkan seutas tali yang ujungnya diikatkan beban 4 kg (g = 10 ms-2 ). Percepatan gerak turunnya beban adalah …',
			//stage 2 level 2
			'Sebuah partikel bermassa 0,2 gram bergerak melingkar dengan kecepatan sudut tetap 10 rad s-1. Jika jari-jari lintasan partikel 3 cm, maka momentum sudut partikel itu adalah …',
			//stage 2 level 3
			'Seorang penari berputar, tangan terentang sepanjang 160 cm. Kemudian tangan dilipat menjadi 80 cm sepanjang siku. Jika kecepatan sudut putar dari penari itu tetap maka momentum liniernya …',
			//stage 2 level 4
			'Besar momen inersia bola pejal bermassa M dan jari-jari R yang sumbu rotasinya berada pada jarak 0,5 R dari pusat massa adalah . . .',
			//stage 2 level 5
			'Kelereng yang memiliki jari-jari 10 cm berotasi dengan poros melalui pusat kelereng. Kelereng memiliki persamaan kecepatan sudut ω= (20+30 t) rad/s, dengan t dalam sekon. Jika massa kelereng 0,5 kg, maka besar momen gaya yang bekerja pada kelereng adalah . . .',
			//stage 2 level 6
			'kg m2 adalah SI unit momen inersia',
			//stage 2 level 7
			'Tongkat penyambung tak bermassa sepanjang 4 m menghubungkan dua bola. Momen gaya inersia sistem jika diputar terhadap sumbu P yang berjarak 1 m di kanan bola A adalah...',
			//stage 2 level 8
			'Sebuah bola pejal memiliki massa 2 kg berputar dengan sumbu putar tepat melalui tengahnya. Jika diameter bola tersebut 30 cm hitunglah momen inersia bola tersebut!',
			//stage 2 level 9
			'Diberikan sebuah batang tipis dengan panjang 8 meter dan bermassa 480 gram. Jika momen inersia dengan poros di pusat massa batang adalah I = 1/12 ML2 tentukan besar momen inersia batang jika poros digeser ke kanan sejauh 2 meter!',
			//stage 2 level 10
			'Sebuah silinder berongga berjari-jari R bermassa M memiliki momen inersia MR² kg/m², menggelinding dengan kecepatan sudut w. Agar silinder tersebut berhenti berputar dan menggelinding dalam waktu 2 sekon, maka besar torsi yang harus dikerjakan pada silinder tersebut sebesar ....',
			//stage 3 level 1
			'Sebuah pegas dengan konstanta sebesar 1.000 N/m ditarik dengan gaya sebesar 100 N. Berapakah pertambahan panjang pegas tersebut ?',
			//stage 3 level 2
			'Tegangan merupakan hasil bagi antara gaya tarik yang dialami benda dengan luas penampangnya',
			//stage 3 level 3
			'',
			//stage 3 level 4
			'',
			//stage 3 level 5
			'',
			//stage 3 level 6
			'',
			//stage 3 level 7
			'',
			//stage 3 level 8
			'',
			//stage 3 level 9
			'',
			//stage 3 level 10
			'',
			//stage 4 level 1
			'',
			//stage 4 level 2
			'',
			//stage 4 level 3
			'',
			//stage 4 level 4
			'',
			//stage 4 level 5
			'',
			//stage 4 level 6
			'',
			//stage 4 level 7
			'',
			//stage 4 level 8
			'',
			//stage 4 level 9
			'',
			//stage 4 level 10
			'',
			//stage 5 level 1
			'',
			//stage 5 level 2
			'',
			//stage 5 level 3
			'',
			//stage 5 level 4
			'',
			//stage 5 level 5
			'',
			//stage 5 level 6
			'',
			//stage 5 level 7
			'',
			//stage 5 level 8
			'',
			//stage 5 level 9
			'',
			//stage 5 level 10
			'',
			//stage 6 level 1
			'',
			//stage 6 level 2
			'',
			//stage 6 level 3
			'',
			//stage 6 level 4
			'',
			//stage 6 level 5
			'',
			//stage 6 level 6
			'',
			//stage 6 level 7
			'',
			//stage 6 level 8
			'',
			//stage 6 level 9
			'',
			//stage 6 level 10
			'',
			//stage 7 level 1
			'',
			//stage 7 level 2
			'',
			//stage 7 level 3
			'',
			//stage 7 level 4
			'',
			//stage 7 level 5
			'',
			//stage 7 level 6
			'',
			//stage 7 level 7
			'',
			//stage 7 level 8
			'',
			//stage 7 level 9
			'',
			//stage 7 level 10
			'',
		);

		$levels = array();
		for ($i = 1; $i <= 70; $i++) {
			array_push($levels, $i);
		}

		$topics = array();
		for ($i = 1; $i <= 70; $i++) {
			if (($i % 10) == 0) {
				array_push($topics, (floor($i / 10)));
			} else {
				array_push($topics, ((floor($i / 10)) + 1));
			}
		}

		for ($i = 0; $i < 70; $i++) {
			$problem = Fis11GameProblem::create([
				'problem' => $questions[$i],
				'level_id' => $levels[$i],
				'topic_id' => $topics[$i],
			]);

			DB::table('fis11_game_problems_logs')->insert([
				'problem_id' => $problem->id,
				'action' => 'create',
				'path' => 'Database\Seeders\Fis11GameProblemSeeder',
				'description' => 'Create problem with ID: ' . $problem->id,
				'ip_address' => $request->ip(),
				'created_at' => now(),
				'updated_at' => now(),
			]);
		}
	}
}
