<?php

namespace Database\Seeders;

use App\Models\Fis11GameStage;
use App\Models\Fis11GameTopic;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11GameTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $topics = array(
            'kesetimbangan_benda_tegar',
            'dinamika_rotasi',
            'elastisitas_dan_hukum_hooke',
            'hukum_pascal',
            'suhu_dan_kalor',
            'gelombang_bunyi',
            'cermin_dan_lensa',
        );

        for ($i = 0; $i < 7; $i++) {
            $topic = Fis11GameTopic::create([
                'topic' => $topics[$i],
            ]);

            DB::table('fis11_game_topics_logs')->insert([
                'topic_id' => $topic->id,
                'action' => 'create',
                'path' => 'Database\Seeders\Fis11GameTopicSeeder',
                'description' => 'Create topic ' . $topic[$i],
                'ip_address' => $request->ip(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
