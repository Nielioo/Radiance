<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameLevel;
use App\Http\Requests\StoreFis11GameLevelRequest;
use App\Http\Requests\UpdateFis11GameLevelRequest;
use App\Models\Fis11GameStage;

class Fis11GameLevelController extends Controller
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
	 * @param  \App\Http\Requests\StoreFis11GameLevelRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreFis11GameLevelRequest $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Fis11GameLevel  $fis11GameLevel
	 * @return \Illuminate\Http\Response
	 */
	public function show($stage, $level)
	{
		$title = 'Stage ' . $stage . ' Level ' . $level;
		$stageData = Fis11GameStage::getStage($stage);
		$theme = $stageData->theme;

		$storyFile = public_path('storyText/storyStage' . $stage . 'Level' . $level . '.json');

		if (!file_exists($storyFile)) {
			return redirect(route('stages.levels.questions.index', ['stage' => $stage, 'level' => $level]));
		}

		return view('contents.levels.level', compact('title', 'stage', 'theme', 'level'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Fis11GameLevel  $fis11GameLevel
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Fis11GameLevel $fis11GameLevel)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateFis11GameLevelRequest  $request
	 * @param  \App\Models\Fis11GameLevel  $fis11GameLevel
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateFis11GameLevelRequest $request, Fis11GameLevel $fis11GameLevel)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Fis11GameLevel  $fis11GameLevel
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Fis11GameLevel $fis11GameLevel)
	{
		//
	}
}
