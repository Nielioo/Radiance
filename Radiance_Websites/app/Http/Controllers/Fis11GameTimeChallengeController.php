<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameProblem;
use Illuminate\Http\Request;

class Fis11GameTimeChallengeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$title = 'Time Challenge';
		$problems = Fis11GameProblem::all();
		$randomNumber = rand(0, 10);

		return view('contents.timeChallenge.timeChallenge', compact('title', 'problems', 'randomNumber'));
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
	public function show(Fis11GameProblem $fis11GameProblem)
	{
		//
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
