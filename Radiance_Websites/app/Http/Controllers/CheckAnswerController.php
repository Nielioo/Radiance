<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameAnswer;
use App\Models\Fis11GameLevel;
use App\Models\Fis11GameProblem;
use App\Models\Fis11GameStage;
use App\Models\Fis11GameStoryHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckAnswerController extends Controller
{
	public function checkAnswerStory(Request $request)
	{
		// Get request data
		$stage = $request->stage;
		$level = $request->level;
		$chosenOption = $request->chosenOption;
		$chosenAnswerId = $request->chosenAnswerId;

		// Prepare question page with checked answer
		$levelData = Fis11GameLevel::getLevel($stage, $level);
		$levelId = $levelData->id;
		$problem = $levelData->gameProblem;
		$answers = $problem->gameAnswers;
		$answer = Fis11GameAnswer::getAnswerById($chosenAnswerId);
		$isTrue = $answer->isTrue;

		// Store game result
		$request['student_id'] = Auth::id();
		$request['level_id'] = $levelId;
		if ($isTrue) {
			$request['star'] = 3;
		} else {
			$request['star'] = 0;
		}

		$validated = $request->validate([
			'student_id' => 'required',
			'level_id' => 'required',
			'star' => 'required',
		]);

		$storyHistory = Fis11GameStoryHistory::create($validated);

		DB::table('fis11_game_story_histories_logs')->insert([
			'game_id' => $storyHistory->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\CheckAnswerController@checkAnswerStory',
			'description' => 'User with ID ' . $validated['student_id'] . ' played stage ' . strval($stage) . ' level ' . strval($level) . ' with ' . $validated['star'] . ' stars',
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return redirect(route('stages.levels.questions.index', ['stage' => $stage, 'level' => $level, 'chosenOption' => $chosenOption, 'isTrue' => $isTrue]));
	}

	public function checkAnswerTimeChallenge(Request $request)
	{
		// Get request data
		$chosenAnswerId = $request->chosenAnswerId;
		$score = (int) $request->score;
		$timer = (int) $request->timer;

		
		// Check answer
		$answer = Fis11GameAnswer::getAnswerById($chosenAnswerId);
		$isTrue = $answer->isTrue;
		if ($isTrue) {
			$score += 10;
		} else {
			$score -= 10;
			if ($score < 0) {
				$score = 0;
			}
		}
		
		// Save previous score and timer in session
		$request->session()->put('previousScore', $score);
		$request->session()->put('previousTimer', $timer);

		return redirect(route('timeChallenges.index', ['score' => $score, 'timer' => $timer]));
	}
}
