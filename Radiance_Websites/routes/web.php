<?php

use App\Http\Controllers\Admin\ProblemController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CheckAnswerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Fis11GameLevelController;
use App\Http\Controllers\Fis11GameProblemController;
use App\Http\Controllers\Fis11GameStageController;
use App\Http\Controllers\Fis11GameStoryHistoryController;
use App\Http\Controllers\Fis11GameTimeChallengeController;
use App\Http\Controllers\Fis11GameTimeChallengeHistoryController;
use App\Http\Controllers\Fis11StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainModeController;
use App\Models\Fis11Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home');

	Route::get('/stages/{stage}/levels/{level}/questions', ['as' => 'stages.levels.questions.index', 'uses' => 'App\Http\Controllers\Fis11GameProblemController@index']);
	Route::resource('stages.levels.questions', Fis11GameProblemController::class, ['except' => ['index']]);


	Route::get('/timeChallenges', ['as' => 'timeChallenges.index', 'uses' => 'App\Http\Controllers\Fis11GameTimeChallengeController@index']);
	Route::resource('timeChallenges', Fis11GameTimeChallengeController::class, ['except' => ['index']]);

	Route::resources([
		'stages' => Fis11GameStageController::class,
		'stages.levels' => Fis11GameLevelController::class,
		'storyHistories' => Fis11GameStoryHistoryController::class,
		'storyHistories' => Fis11GameStoryHistoryController::class,
		'profiles' => StudentController::class,
		'profileStudent' => Fis11StudentController::class,
		// 'adminDashboard' => AdminDashboardController::class,
		// 'adminProblem' => ProblemController::class
	]);

	Route::get('/inTime', function () {
		return view('contents.modes.inTime');
	});

	Route::get('/checkAnswerStory', [CheckAnswerController::class, 'checkAnswerStory']);
	Route::get('/checkAnswerTimeChallenge', [CheckAnswerController::class, 'checkAnswerTimeChallenge']);
	Route::get('/timeChallengeResult', [CheckAnswerController::class, 'showTimeChallengeResult']);

	Route::middleware(['admin'])->group(function () {
		Route::resources([
			'adminDashboard' => AdminDashboardController::class,
			'adminProblem' => ProblemController::class
		]);
	});
});

Route::resources([
	'' => MainController::class,
	'mainMode' => MainModeController::class,
	'timeChallengeHistories' => Fis11GameTimeChallengeHistoryController::class
]);
