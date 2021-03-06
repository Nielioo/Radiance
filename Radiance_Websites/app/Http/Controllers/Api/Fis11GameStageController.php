<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis11GameStage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Fis11GameStageController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($stage)
    {
		$stageData = Fis11GameStage::getStage($stage);
		$theme = $stageData->theme;
		// Get stage levels
		$levels = $stageData->gameLevels;
		$levelSize = count($levels);

		// Get highest star for all levels
		$highestStars = $levels->map(function ($level) {
			return $level->gameStoryHistories
				->filter(function ($history) {
					return data_get($history, 'student_id') === auth('api')->user()->id;
				})->unique('star')->max('star');
		})->all();
		$highestStars = array_filter($highestStars);
		$highestStarsSize = count($highestStars);

		// Level that can be played
		for ($i = 0; $i < $levelSize; $i++) {
			if ($i != 0) {
				if ($i > $highestStarsSize) {
					$levels->forget($i);
				}
			}
		}

		return [
			'theme' => $theme,
			'levels' => $levels,
			'highestStars' => $highestStars,
		];
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
