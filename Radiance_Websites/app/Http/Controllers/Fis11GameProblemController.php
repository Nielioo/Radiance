<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameLevel;
use App\Models\Fis11GameProblem;
use App\Http\Requests\StoreFis11GameProblemRequest;
use App\Http\Requests\UpdateFis11GameProblemRequest;
use App\Models\Fis11GameStage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Fis11GameProblemController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		// Get request data
		$stage = $request->stage;
		$level = $request->level;
		$chosenOption = $request->chosenOption;
		$isTrue = $request->isTrue;

		// Prepare question page
		$title = 'Stage ' . $stage . ' Level ' . $level;
		$stageData = Fis11GameStage::getStage($stage);
		$theme = $stageData->theme;
		$levelData = Fis11GameLevel::getLevel($stage, $level);
		$levelId = $levelData->id;
		$problem = $levelData->gameProblem;
		$answers = $problem->gameAnswers;

		// Get next this level data
		$storyHistories = $levelData->gameStoryHistories;

		// Get highest star this level
		$highestStar = $storyHistories->filter(function ($history) {
			return data_get($history, 'student_id') === Auth::id();
		})->unique('star')->max('star');

		// Get next previous level data
		$previousLevelData = $levelData;
		if ($level > 1) {
			$previousLevelData = Fis11GameLevel::getLevel($stage, $level - 1);
		}
		$previousStoryHistories = $previousLevelData->gameStoryHistories;

		// Get highest star this level
		$previousHighestStar = $previousStoryHistories->filter(function ($history) {
			return data_get($history, 'student_id') === Auth::id();
		})->unique('star')->max('star');

		// Check if level locked
		if ($level != 1 && $highestStar == null && $previousHighestStar == null) {
			return redirect(route('stages.show', ['stage' => $stage]));
		}

		return view('contents.levels.question', compact('title', 'stage', 'theme', 'level', 'levelId', 'problem', 'answers', 'chosenOption', 'isTrue'));
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
	 * @param  \App\Http\Requests\StoreFis11GameProblemRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreFis11GameProblemRequest $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Fis11GameProblem  $fis11GameProblem
	 * @return \Illuminate\Http\Response
	 */
	public function show($stage)
	{
		return redirect(route('stages.show', ['stage' => $stage]));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Fis11GameProblem  $fis11GameProblem
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Fis11GameProblem $fis11GameProblem)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateFis11GameProblemRequest  $request
	 * @param  \App\Models\Fis11GameProblem  $fis11GameProblem
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateFis11GameProblemRequest $request, Fis11GameProblem $fis11GameProblem)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Fis11GameProblem  $fis11GameProblem
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Fis11GameProblem $fis11GameProblem)
	{
		//
	}
}
