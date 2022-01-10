<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fis11GameAnswer;
use App\Models\Fis11GameLevel;
use App\Models\Fis11GameProblem;
use App\Models\Fis11GameStage;
use App\Models\Fis11GameTopic;
use Illuminate\Http\Request;

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

		return view('contents.admin.questions.question', compact('title', 'problems'));
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
		$validatedProblem = $request->validate([
			'problem' => ['required'],
			'level' => ['required'],
			'topic' => ['required'],
		]);

		$validatedAnswer1 = $request->validate([
			'answer1' => ['required'],
			'isTrue1' => ['required'],
		]);

		$problem = Fis11GameProblem::create($validatedProblem);

		Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer1,
			'isTrue' => $request->isTrue1,
		]);

		Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer2,
			'isTrue' => $request->isTrue2,
		]);

		Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer3,
			'isTrue' => $request->isTrue3,
		]);

		Fis11GameAnswer::create([
			'problem_id' => $problem->id,
			'answer' => $request->answer4,
			'isTrue' => $request->isTrue4,
		]);

		// logs

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
	public function edit(Fis11GameProblem $problem)
	{
		$title = 'Edit Problem';

		return view();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Fis11GameProblem $problem, Fis11GameAnswer $answers)
	{
		$problem->update([
			'problem' => $request->cId
		]);

		foreach ($answers as $answer) {
			# code...
		}

		// $answer->update([
		// 	''
		// ])

		return redirect(route(''));
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
