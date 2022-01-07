<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameStage;
use App\Models\Fis11GameStoryHistory;
use App\Http\Requests\StoreFis11GameStoryHistoryRequest;
use App\Http\Requests\UpdateFis11GameStoryHistoryRequest;
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
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StoreFis11GameStoryHistoryRequest  $request
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

		return redirect(route('stages.show', ['stage' => $stage]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Fis11GameStoryHistory  $fis11GameStoryHistory
	 * @return \Illuminate\Http\Response
	 */
	public function show(Fis11GameStoryHistory $fis11GameStoryHistory)
	{
        //
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Fis11GameStoryHistory  $fis11GameStoryHistory
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Fis11GameStoryHistory $fis11GameStoryHistory)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateFis11GameStoryHistoryRequest  $request
	 * @param  \App\Models\Fis11GameStoryHistory  $fis11GameStoryHistory
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateFis11GameStoryHistoryRequest $request, Fis11GameStoryHistory $fis11GameStoryHistory)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Fis11GameStoryHistory  $fis11GameStoryHistory
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Fis11GameStoryHistory $fis11GameStoryHistory)
	{
		//
	}
}
