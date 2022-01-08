<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis11GameLevel;
use App\Models\Fis11GameStage;
use Illuminate\Http\Request;

class Fis11GameProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
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
    public function store(Request $request)
    {
        $stageData = Fis11GameStage::getStage($request->stage);
        // Get stage theme
        $theme = $stageData->theme;
        $levelData = Fis11GameLevel::getLevel($request->stage, $request->level);
		$levelId = $levelData->id;
        $problem = $levelData->gameProblem;
        $answers = $problem->gameAnswers;

        return [
			'student_id' => auth('api')->user()->id,
            'stage' => $request->stage,
            'theme' => $theme,
            'level' => $request->level,
			'level_id' => $levelId,
            'problems' => $problem,
            'answers' => $answers,
        ];
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
