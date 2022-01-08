<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis11Student;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::getStudentById(auth('api')->user()->id);

        $username = $student->username;
        $name = $student->name;
        $email = $student->email;
        $school = $student->school;
        $city = $student->city;
        $birthyear = $student->birthyear;

        return [
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'school' => $school,
            'city' => $city,
            'birthyear' => $birthyear
        ];
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
        $student = Student::getStudentById(auth('api')->user()->id);

        $student->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear,
        ]);

        DB::table('fis11_students_logs')->insert([
			'student_id' => auth('api')->user()->id,
			'action' => 'edit',
			'path' => 'App\Http\Controllers\Api\StudentsController@update',
			'description' => 'Edit profile with id '. auth('api')->user()->id,
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

        return "null";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $student = Student::getStudentById(auth('api')->user()->id);
        $student->delete();
        $fis11student = Fis11Student::getStudentByStudentId(auth('api')->user()->id);
        $fis11student->delete();

        DB::table('fis11_students_logs')->insert([
			'student_id' => auth('api')->user()->id,
			'action' => 'delete',
			'path' => 'App\Http\Controllers\Api\StudentsController@destroy',
			'description' => 'Delete profile with id '. auth('api')->user()->id,
			'ip_address' => $request->ip(),
			'created_at' => now(),
			'updated_at' => now(),
		]);

        return "null";
    }
}
