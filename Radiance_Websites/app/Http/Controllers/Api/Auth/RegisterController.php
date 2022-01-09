<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fis11Student;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function register(Request $request)
	{
		$this->validate($request, [
			'username' => 'required|unique:students,username',
			'name' => 'required',
			'email' => 'required|unique:students,email',
			'password' => 'required|string|min:8|confirmed',
			'school' => 'string|max:255',
			'city' => 'string|max:255',
			'birthyear' => 'date',
		]);

		$student = $this->newStudent($request->all());

        $student->profileBorders()->attach(1);
		$student->characterSkins()->attach(1);

		DB::table('fis11_students_logs')->insert([
			'student_id' => $student->id,
			'action' => 'create',
			'path' => 'App\Http\Controllers\Api\Auth\RegisterController@register',
			'description' => 'Register new user with ID: ' . strval($student->id),
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

		if (empty($student)) {
			return response([
				'message' => 'Failed to create account',
			]);
		} else {
			return response([
				'message' => 'Account successfully created',
			]);
		}
	}

	private function newStudent($data)
	{
		$student = Student::create([
			'username' => $data['username'],
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
			'school' => $data['school'],
			'city' => $data['city'],
			'birthyear' => $data['birthyear'],
		]);

		Fis11Student::create([
			'student_id' => $student->id,
			// 'is_login' => '1',
		]);

		return $student;
	}
}
