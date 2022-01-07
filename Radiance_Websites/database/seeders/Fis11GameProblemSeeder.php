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
			'Hasil bagi antara gaya tarik yang dialami benda dengan luas penampangnya adalah',
			//stage 3 level 3
			'Diketahui panjang sebuah pegas 25 cm. Sebuah balok bermassa 20 gram digantungkan pada pegas sehingga pegas bertambah panjang 5 cm. Tentukan modulus elastisitas jika luas penampang pegas 100 cm² !',
			//stage 3 level 4
			'Hasil bagi antara pertambahan panjang dengan panjang awal adalah',
			//stage 3 level 5
			'Seorang anak yang massanya 50 kg bergantung pada ujung sebuah pegas sehingga pegas bertambah panjang 10 cm. Tetapan pegas bernilai…',
			//stage 3 level 6
			'Perbandingan antara tegangan dan regangan yang dialami oleh suatu benda adalah',
			//stage 3 level 7
			'Untuk meregangkan sebuah pegas sebesar 4 cm diperlukan usaha 0,16 J. Gaya yang diperlukan untuk meregangkan pegas tersebut sepanjang 2 cm diperlukan gaya sebesar…',
			//stage 3 level 8
			'Sebuah pegas memiliki tetapan 5 Nm-1. Berapakah massa beban yang harus digantungkan agar pegas bertambah panjang 98 mm? Berapakah periodenya jika beban tersebut digetarkan? (g = 9,8 m s',
			//stage 3 level 9
			'Dua buah kawat x dan y panjangnya masing-masing 1 m dan 2 m ditarik dengan gaya yang sama sehingga terjadi pertambahan panjang masing-masing 0,5 mm dan 1 mm. Jika diameter kawat y dua kali diameter kawat x, perbandingan modulus Young kawat x terhadap y adalah....',
			//stage 3 level 10
			'Seutas kawat dengan panjang L dan jari-jari r dijepit dengan kuat di salah satu ujungnya. Ketika ujung kawat lainnya ditarik oleh gaya F, panjang kawat bertambah 2 cm. Kawat lain dari bahan yang sama, panjangnya 1/4 L dan jari-jari 2r ditarik dengan gaya 2F. Pertambahan panjang kawat ini adalah...',
			//stage 4 level 1
			'Gaya dibagi besar luasan penampangnya adalah',
			//stage 4 level 2
			'Besar keuntungan mekanis dari sistem fluida/hidrolik yang menggunakan hukum Pascal adalah rasio gaya yang keluar dibagi gaya yang diberikan',
			//stage 4 level 3
			'Tekanan maksimum pada dongkrak hidrolik adalah 10 atm. Berapakah massa maksimum (kg) yang dapat diangkat jika diameter keluaran adalah 20 cm',
			//stage 4 level 4
			'Luas penampang dongkrak hidrolik adalah A1 = 0,04 m2 dan A2 = 0,10 m2. Jika gaya masukan F1 = 5N maka keluaran gaya maksimum adalah',
			//stage 4 level 5
			'Jari-jari penampang kecil dongkrak hidrolik adalah 2 cm dan jari-jari penampang besar adalah 25 cm. Berapa gaya yang diberikan pada penampang kecil untuk mengangkat sebuah mobil bermassa 2000 kg',
			//stage 4 level 6
			'Sebuah pengungkit hidrolik digunakan untuk mengangkat sebuah beban sebesar 1 ton. Apabila rasio perbandingan antara luasan penampang adalah 1:200 maka berapakah gaya minimal yang harus bekerja pada pengungkit hidrolik?',
			//stage 4 level 7
			'Keuntungan mekanis dari sebuah pengungkit hidrolik memiliki nilai 20. Apabila seseorang ingin mengangkat sebuah mobil seberat 879kg maka berapakah gaya yang harus dilakukan oleh sistem?',
			//stage 4 level 8
			'Sebuah pengungkit hidrolik memiliki ukuran diameter piston masuk 14 cm dan untuk diameter keluar sebesar 42cm. Apabila piston masuk tersebut terbenam sedalam 10cm maka berapakah ketinggian piston yang terangkat keluar?',
			//stage 4 level 9
			'Sebuah kompresor dengan selang yang terpasang pada keran memiliki diameter 14mm. Apabila sebuah penyemprot dengan diameter lubang semprot 0,42mm dipasang pada ujung selang serta ketika kompresor dinyalakan terukur tekanan sebesar 10 bar. Tentukan besar gaya keluarnya udara yang keluar dari lubang semprot apabila tekanan kompresor tidak mengalami penurunan.',
			//stage 4 level 10
			'Sebuah dongkrak hidrolik memiliki rasio diameter piston 1 : 40. Pada piston besar dimuati beban 1 ton. Berapakah besar gaya yang harus diberikan pada piston kecil agar mencapai keadaan setimbang?',
			//stage 5 level 1
			'Sepotong logam dipanaskan dan diukur dengan termometer optik menunjukkan skala 36oR. Berapakah suhunya jika diukur menggunakan termometer fahrenheit',
			//stage 5 level 2
			'Kalor juga disebut sebagai energi panas yang berpindah dari benda bersuhu lebih tinggi ke benda yang bersuhu lebih rendah.',
			//stage 5 level 3
			'Termometer X yang telah ditera menunjukkan angka -30o pada titik beku air dan 90o pada titik didih air. Suhu 60oX sama dengan …',
			//stage 5 level 4
			'Sebatang logam dipanaskan sehingga suhunya 80oC panjangnya menjadi 115 cm. Jika koefisien muai panjang logam 3.10-3 oC-1 dan suhu mula-mula logam 30oC, maka panjang mula-mula logam adalah….',
			//stage 5 level 5
			'Saat suhunya dinaikkan sebesar 100° C baja yang panjangnya 1 m bertambah panjang 1 mm. berapakah Pertambahan panjang batang baja lain dengan panjang 60 cm jika suhunya bertambah 20° C adalah ....',
			//stage 5 level 6
			'Alat yang digunakan untuk mengukur suhu adalah ....',
			//stage 5 level 7
			'Perhatikan pernyataan berikut! 1) Titik bekunya rendah 2) Pemuaian tidak teratur 3) Tidak membasahi dinding 4) Mudah dilihat Pernyataan di atas yang menunjukkan kelebihan raksa digunakan sebagai pengisi termometer yaitu …',
			//stage 5 level 8
			'Skala batas bawah dan batas atas dari termometer klinis (suhu tubuh) yaitu …',
			//stage 5 level 9
			'Perhatikan faktor-faktor berikut! 1) Memperkecil massa jenis kawat 2) Memperpanjang kawat',
			//stage 5 level 10
			'Dua batang besi A dan B bersuhu 20° C dengan panjang berbeda masing masing 4 m dan 6 m. Saat dipanasi sampai suhu 50° C, ternyata batang besi A panjangnya menjadi 4,15 m. Jika besi B dipanasi sampai suhu 60° C , maka panjang akhirnyanya menjadi ....',
			//stage 6 level 1
			'Gelombang bunyi tidak dapat mengalami peristiwa . . .',
			//stage 6 level 2
			'Warna bunyi yang dihasilkan oleh sumber ditentukan oleh . . .',
			//stage 6 level 3
			'Perhatikan faktor-faktor berikut! 1) Memperkecil massa jenis kawat 2) Memperpanjang kawat 3) Memperbesar tegangan kawat 4) Memperbesar ukuran kawat Faktor-faktor yang dapat mempercepat perambatan gelombang pada kawat adalah . . .',
			//stage 6 level 4
            'Sebuah mobil ambulans yang menyalakan sirene bergerak menuju suatu perempatan lalu lintas. Orang yang diam di perempatan tersebut mendengar frekuensi sirene sebesar 900 Hz, ketika ambulans mendekati perempatan dan frekuensi sebesar 800 Hz ketika ambulans tersebut menjauhi perempatan. Asumsikan kecepatan ambulans konstan dan kecepatan bunyi di udara sebesar 340 m/s. Kecepatan ambulans adalah',
            //stage 6 level 5
            'Tali yang panjangnya 5 m bertegangan 2 N dan digetarkan sehingga terbentuk gelombang stasioner. Jika massa tali 6,25 x 10-3 kg. Cepat rambat gelombang di tali adalah .... (dalam m/s)',
			//stage 6 level 6
			'Seutas kawat yang memiliki massa jenis linear 0,05 gram/cm ditegangkan di antara dua tiang kaku dengan tegangan 450 N. diamati bahwa kawat beresonansi pada frekuensi 450 Hz. Frekuensi lebih tinggi berikutnya di mana kawat beresonansi adalah 525 Hz. Panjang kawat tersebut adalah ....',
			//stage 6 level 7
			'Nada atas pertama pipa organa terbuka yang panjangnya 40 cm beresonansi dengan pipa organa tertutup. Jika pada saat beresonansi jumlah simpul pada kedua pipa sama, maka panjang pipa organa tertutup adalah ... cm',
			//stage 6 level 8
			'Pesawat terbang saat terbang dapat menghasilkan bunyi dengan daya 32π x 108 W. Apabila ada 10 pesawat terbang sejenis terbang bersamaan, tingkat intensitas bunyi yang didengar oleh pengamat pada jarak 4 km dari pesawat tersebut adalah .... (anggap intensitas ambang pendengaran telinga normal adalah 10-12 W/m2)',
			//stage 6 level 9
			'Pada jarak 3 m dari sumber ledakan terdengar bunyi dengan taraf intensitas 50 dB. Pada jarak 30 m dari sumber ledakan bunyi itu terdengar dengan taraf intensitas ... dB',
			//stage 6 level 10
			'Sepotong dawai menghasilkan nada dasar f. Bila dipendekkan 8 cm tanpa mengubah tegangan dihasilkan frekuensi 1,25f. Jika dawai dipendekkan 2 cm lagi, maka frekuensi yang dihasilkan adalah ....',
			//stage 7 level 1
			'Ketika berada di depan cermin datar, kita dapat melihat citra diri kita pada cermin tersebut. Hal ini membuktikan bahwa cermin datar memiliki sifat.....',
			//stage 7 level 2
			'Mobil terlihat dari spion yang memiliki jarak fokus 2 meter. Jarak mobil dengan spion sesungguhnya 20 meter. Maka jarak bayangan mobil tersebut adalah.....meter.',
			//stage 7 level 3
			'Sebuah benda diletakkan pada jarak 6 cm di depan cermin cekung dan bayangan yang terbentuk 30 cm dari cermin. Jarak fokus cermin adalah ....',
			//stage 7 level 4
			'Seorang anak memiliki tinggi 160 cm. Ketinggian cermin datar yang diperlukan agar anak tadi dapat melihat bayangan seluruh tubuhnya adalah.....',
			//stage 7 level 5
			'Suatu lensa cembung memiliki jarak titik fokus 0.2 m. Bila suatu obyek berada pada jarak 0.4 m. Perbesaran bayangan benda tersebut adalah....',
			//stage 7 level 6
			'Suatu obyek diletakkan di depan lensa cekung pada jarak 40 cm. Bayangan yang terbentuk berupa bayangan tegak dengan ukuran 1/2 dari ukuran obyek. Berapakah jarak titik fokus lensa cekung tersebut ?',
			//stage 7 level 7
			'Pelangi merupakan salah satu peristiwa yang menunjukkan bahwa cahaya memiliki sifat ....',
			//stage 7 level 8
			'Sebuah benda diletakkan 15 cm didepan cermin cembung berjari-jari 20 cm. Jarak dan sifat bayangannya adalah….',
			//stage 7 level 9
			'Sebuah benda diletakkan tepat ditengah antara titik fokus dan permukaan cermin cekung. Bayangan yang terbentuk adalah1. Diperbesar 2 kali2. Tegak.3. Mempunyai jarak bayangan sama dengan jarak fokus4. Maya.Pernyataan yang benar adalah…',
			//stage 7 level 10
			'Sifat-sifat cermin cembung yang benar',
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
