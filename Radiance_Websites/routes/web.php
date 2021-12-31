<?php

use App\Http\Controllers\Fis11GameLevelController;
use App\Http\Controllers\Fis11GameStageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainModeController;
use App\Models\Fis11GameLevel;
use App\Models\Fis11GameStage;
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



Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::resources([
	'' => MainController::class,
	'mainMode' => MainModeController::class,
	'stages' => Fis11GameStageController::class,
	'stages.levels' => Fis11GameLevelController::class,
]);

Route::get('/inTime', function () {
    return view('contents.modes.inTime');
});

Route::get('/firstStage', function () {
    return view('contents.stages.stage1');
});

Route::get('/dialogBox', function () {
    return view('dialog_box');
});

Route::get('/level', function () {
    return view('contents.levels.level');
});
