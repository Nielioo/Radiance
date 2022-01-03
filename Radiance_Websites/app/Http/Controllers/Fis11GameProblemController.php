<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameLevel;
use App\Models\Fis11GameProblem;
use App\Http\Requests\StoreFis11GameProblemRequest;
use App\Http\Requests\UpdateFis11GameProblemRequest;
use App\Models\Fis11GameStage;

class Fis11GameProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($stage, $level)
    {
        $title = 'Stage ' . $stage . ' Level ' . $level;
        $stageData = Fis11GameStage::getStage($stage);
        // Get stage theme
        $theme = $stageData->theme;
        $levelData = Fis11GameLevel::getLevel($stage, $level);
        $problem = $levelData->gameProblem;
        $answers = $problem->gameAnswers;
        return view('contents.levels.question', compact('title', 'stage', 'theme', 'level', 'problem','answers'));
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
    public function show()
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
