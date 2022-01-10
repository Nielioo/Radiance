<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fis11GameAnswer;
use App\Models\Fis11GameLevel;
use App\Models\Fis11GameProblem;
use App\Models\Fis11GameStage;
use App\Models\Fis11GameTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProblemController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$title = "Problems";
		$problems = Fis11GameProblem::all();
		$adminName = Auth::user()->name;

		return view('contents.admin.questions.question', compact('title', 'problems', 'adminName'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$title = 'Create Question';
		$levels = Fis11GameLevel::all();
		$topics = Fis11GameTopic::all();

		return view('contents.admin.questions.createQuestion', compact('title', 'levels', 'topics'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'answer1' => ['required'],
			'answer2' => ['required'],
			'answer3' => ['required'],
			'answer4' => ['required'],
			'isTrue1' => ['required'],
			'isTrue2' => ['required'],
			'isTrue3' => ['required'],
			'isTrue4' => ['required'],
		]);

		$validatedProblem = $request->validate([
			'problem' => ['required'],
			'level_id' => [],
			'topic_id' => ['required'],
		]);

		$problem = Fis11GameProblem::create($validatedProblem);

		$newAnswer1 = Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer1,
			'isTrue' => $request->isTrue1,
		]);

		$newAnswer2 = Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer2,
			'isTrue' => $request->isTrue2,
		]);

		$newAnswer3 = Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer3,
			'isTrue' => $request->isTrue3,
		]);

		$newAnswer4 = Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer4,
			'isTrue' => $request->isTrue4,
		]);

		// Logs
		DB::table('fis11_game_problems_logs')->insert([
			'problem_id' => $problem->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Admin\ProblemController@store',
			'description' => 'Create problem with ID' . strval($problem->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $newAnswer1->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Admin\ProblemController@store',
			'description' => 'Create answer with ID' . strval($newAnswer1->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $newAnswer2->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Admin\ProblemController@store',
			'description' => 'Create answer with ID' . strval($newAnswer2->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $newAnswer3->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Admin\ProblemController@store',
			'description' => 'Create answer with ID' . strval($newAnswer3->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $newAnswer4->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Admin\ProblemController@store',
			'description' => 'Create answer with ID' . strval($newAnswer4->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return redirect(route('adminProblem.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$title = 'Problem Detail';

		return view();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($problemId)
	{
		$title = 'Edit Problem';
		$problem = Fis11GameProblem::getProblemById($problemId);
		$levels = Fis11GameLevel::all();
		$topics = Fis11GameTopic::all();

		return view('contents.admin.questions.editQuestion', compact('title', 'problem', 'levels', 'topics'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $problemId)
	{
		$this->validate($request, [
			'answer1' => ['required'],
			'answer2' => ['required'],
			'answer3' => ['required'],
			'answer4' => ['required'],
			'isTrue1' => ['required'],
			'isTrue2' => ['required'],
			'isTrue3' => ['required'],
			'isTrue4' => ['required'],
		]);

		$validatedProblem = $request->validate([
			'problem' => ['required'],
			'level_id' => [],
			'topic_id' => ['required'],
		]);

		DB::table('fis11_game_problems')
			->where('id', $problemId)
			->update($validatedProblem);

		$problem = Fis11GameProblem::getProblemById($problemId);
		$answers = $problem->gameAnswers;

		DB::table('fis11_game_answers')
			->where('id', $answers[0]->id)
			->update([
				'problem_id' => $problemId,
				'answer' => $request->answer1,
				'isTrue' => $request->isTrue1,
			]);

		DB::table('fis11_game_answers')
			->where('id', $answers[1]->id)
			->update([
				'problem_id' => $problemId,
				'answer' => $request->answer2,
				'isTrue' => $request->isTrue2,
			]);

		DB::table('fis11_game_answers')
			->where('id', $answers[2]->id)
			->update([
				'problem_id' => $problemId,
				'answer' => $request->answer3,
				'isTrue' => $request->isTrue3,
			]);

		DB::table('fis11_game_answers')
			->where('id', $answers[3]->id)
			->update([
				'problem_id' => $problemId,
				'answer' => $request->answer4,
				'isTrue' => $request->isTrue4,
			]);
		// Logs
		DB::table('fis11_game_problems_logs')->insert([
			'problem_id' => $problemId,
			'action' => 'update',
			'path' => 'App\Http\Controllers\Admin\ProblemController@update',
			'description' => 'Edit problem with ID' . strval($problemId),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $answers[0]->id,
			'action' => 'update',
			'path' => 'App\Http\Controllers\Admin\ProblemController@update',
			'description' => 'Edit answer with ID' . strval($answers[0]->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $answers[1]->id,
			'action' => 'update',
			'path' => 'App\Http\Controllers\Admin\ProblemController@update',
			'description' => 'Edit answer with ID' . strval($answers[1]->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $answers[2]->id,
			'action' => 'update',
			'path' => 'App\Http\Controllers\Admin\ProblemController@update',
			'description' => 'Edit answer with ID' . strval($answers[2]->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('fis11_game_answers_logs')->insert([
			'answer_id' => $answers[3]->id,
			'action' => 'update',
			'path' => 'App\Http\Controllers\Admin\ProblemController@update',
			'description' => 'Edit answer with ID' . strval($answers[3]->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return redirect(route('adminProblem.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($problemId)
	{
		$problem = Fis11GameProblem::getProblemById($problemId);
		$problem->delete();

		return redirect(route('adminProblem.index'));
	}
}
