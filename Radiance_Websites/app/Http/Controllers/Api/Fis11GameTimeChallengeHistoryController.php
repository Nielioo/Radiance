<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFis11GameTimeChallengeHistoryRequest;
use App\Models\Fis11GameTimeChallengeHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fis11GameTimeChallengeHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFis11GameTimeChallengeHistoryRequest $request)
    {
        $validated = $request->validated();

		$timeChallengeHistory = Fis11GameTimeChallengeHistory::create($validated);

		DB::table('fis11_game_time_challenge_histories_logs')->insert([
			'game_id' => $timeChallengeHistory->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Api\Fis11GameTimeChallengeHistoryController@store',
			'description' => 'User with ID ' . auth('api')->user()->id . ' played time challenge mode with ' . $validated['score'] . ' points',
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return "null";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
