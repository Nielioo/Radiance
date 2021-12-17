<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainModeController;
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

Route::resource('', MainController::class);
Route::resource('mainMode', MainModeController::class);

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/inStory', function () {
    return view('contents.inStoryMode');
});

Route::get('/inTime', function () {
    return view('contents.inTime');
});
