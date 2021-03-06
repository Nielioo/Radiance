<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fis11Student;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
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
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'username' => ['required', 'string', 'max:255', 'unique:students'],
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
			'school' => ['string', 'max:255'],
			'city' => ['string', 'max:255'],
			'birthyear' => ['date'],
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\Models\Student
	 */
	protected function create(array $data)
	{
		return Student::create([
			'username' => $data['username'],
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
			'school' => $data['school'],
			'city' => $data['city'],
			'birthyear' => $data['birthyear'],
		]);
	}

	/**
	 * Actions of registration.
	 */
	protected function register(Request $request)
	{
		$this->validator($request->all())->validate();

		event(new Registered($student = $this->create($request->all())));

		$student->profileBorders()->attach(1);
		$student->characterSkins()->attach(1);

		// Start of custom action
		Fis11Student::create([
			'student_id' => $student->id,
			'border_id' => '1',
			'skin_id' => '1',
			'is_login' => '1',
		]);

		DB::table('fis11_students_logs')->insert([
			'student_id' => $student->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Auth\RegisterController@register',
			'description' => 'Register new user with ID: ' . strval($student->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);
		// End of custom action

		$this->guard()->login($student);

		// Start of custom action
		DB::table('fis11_students_logs')->insert([
			'student_id' => $student->id,
			'action' => 'login',
			'path' => 'App\Http\Controllers\Auth\RegisterController@register',
			'description' => 'Login with user ID: ' . strval($student->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);
		// End of custom action

		return $this->registered($request, $student)
			?: redirect('/');
	}
}
