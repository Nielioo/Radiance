<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
		DB::table('fis11_students')
			->where('student_id', $student->id)
			->update([
				'is_login' => '1',
			]);

		return redirect()->intended($this->redirectPath());
	}

	/**
	 * Actions of logout.
	 */
	protected function logout()
	{
		$student_id = Auth::id();

		Auth::logout();

		DB::table('fis11_students')
			->where('student_id', $student_id)
			->update([
				'is_login' => '0',
			]);

		return redirect('/');
	}
}