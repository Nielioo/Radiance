<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Fis11GameProblemController;
use App\Http\Controllers\Api\Fis11GameStageController;
use App\Http\Controllers\Api\Fis11GameStoryHistoryController;
use App\Http\Controllers\Api\Fis11GameTimeChallengeController;
use App\Http\Controllers\Api\Fis11GameTimeChallengeHistoryController;
use App\Http\Controllers\Api\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::post('register', [RegisterController::class, 'register']);

Route::post('login', [LoginController::class, 'login']);

Route::apiResources([
	'storyHistory' => Fis11GameStoryHistoryController::class,
	'timeChallengeHistory' => Fis11GameTimeChallengeHistoryController::class,
	'stage' => Fis11GameStageController::class,
	'timeChallenge' => Fis11GameTimeChallengeController::class,
	'problems' => Fis11GameProblemController::class,
    'profile' => StudentController::class,
]);

Route::group(['middleware' => 'auth:api'], function () {
	Route::post('logout', [LoginController::class, 'logout']);

	Route::post('refresh', [LoginController::class, 'refresh']);
});
