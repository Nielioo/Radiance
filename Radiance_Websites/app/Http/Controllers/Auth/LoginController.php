<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fis11Student;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	 * Actions post login.
	 */
	protected function authenticated(Request $request, Student $student)
	{
		Fis11Student::getStudentByStudentId($student->id)
			->update([
				'is_login' => '1',
			]);

		DB::table('fis11_students_logs')->insert([
			'student_id' => $student->id,
			'action' => 'login',
			'path' => 'App\Http\Controllers\Auth\LoginController@login',
			'description' => 'Login with user ID: ' . strval($student->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return redirect()->intended($this->redirectPath());
	}

	/**
	 * Actions of logout.
	 */
	protected function logout(Request $request)
	{
		$studentId = Auth::id();

		Auth::logout();

		Fis11Student::getStudentByStudentId($studentId)
			->update([
				'is_login' => '0',
			]);

		DB::table('fis11_students_logs')->insert([
			'student_id' => $studentId,
			'action' => 'logout',
			'path' => 'App\Http\Controllers\Auth\LoginController@logout',
			'description' => 'Logout with user ID: ' . strval($studentId),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		return redirect('/');
	}
}
