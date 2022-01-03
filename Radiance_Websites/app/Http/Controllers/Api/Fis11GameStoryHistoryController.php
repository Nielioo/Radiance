<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFis11GameStoryHistoryRequest;
use App\Models\Fis11GameStoryHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Fis11GameStoryHistoryController extends Controller
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
    public function store(StoreFis11GameStoryHistoryRequest $request)
    {
        $validated = $request->validated();
		$stage = $request->stage;
		$level = $request->level;

		$storyHistory = Fis11GameStoryHistory::create($validated);

		DB::table('fis11_game_story_histories_logs')->insert([
			'game_id' => $storyHistory->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Fis11GameStoryHistoryController@store',
			'description' => 'User with ID ' . Auth::id() . ' played stage ' . strval($stage) . ' level ' . strval($level) . ' with ' . $validated['star'] . ' stars',
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
