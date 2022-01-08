<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameProblem;
use App\Models\Fis11GameTimeChallengeHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Fis11GameTimeChallengeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		// Get request data
		$score = $request->score;
		$timer = $request->timer;
		$previousScore = $request->session()->get('previousScore');
		$previousTimer = $request->session()->get('previousTimer');

		if ($score == null) {
			$score = 0;
		} else if ($score != $previousScore) {
			$score = $previousScore;
		}

		$timer = $request->timer;
		if ($timer == null) {
			$timer = 999999;
		} else if ($timer != $previousTimer) {
			$timer = (int) $previousTimer;
		}

		// Get random question
		$randomNumber = rand(0, 69);

		// Prepare time challenge page
		$title = 'Time Challenge';
		$problems = Fis11GameProblem::all();
		$problem = $problems[$randomNumber];
		$answers = $problem->gameAnswers;

		return view('contents.timeChallenge.timeChallenge', compact('title', 'problem', 'answers', 'score', 'timer'));
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
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Fis11GameProblem  $fis11GameProblem
	 * @return \Illuminate\Http\Response
	 */
	public function show(Request $request, $score)
	{
		$previousScore = $request->session()->get('previousScore', '0');
		if ($score != $previousScore) {
			return redirect('/inTime');
		}

		// Store game result
		$request['student_id'] = Auth::id();
		$request['score'] = $score;

		$validated = $request->validate([
			'student_id' => 'required',
			'score' => 'required',
		]);

		$timeChallengeHistory = Fis11GameTimeChallengeHistory::create($validated);

		DB::table('fis11_game_time_challenge_histories_logs')->insert([
			'game_id' => $timeChallengeHistory->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Fis11GameTimeChallengeController@show',
			'description' => 'User with ID ' . $validated['student_id'] . ' played time challenge and scored ' . $validated['score'],
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		// Clear game session
		$request->session()->forget('previousScore');
		$request->session()->forget('previousTimer');

		// Prepare time challenge result page
		$title = 'Time Challenge Result';

		return view('contents.timeChallenge.timeChallengeResult', compact('title', 'score'));
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
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Fis11GameProblem  $fis11GameProblem
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Fis11GameProblem $fis11GameProblem)
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
