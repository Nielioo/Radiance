<?php

namespace App\Http\Controllers;

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
        $title = "Student's Profile";
        $student = Student::getStudentById(Auth::id());

        $name = $student->name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $title = "Edit Profile";
        $student = Student::getStudentById(Auth::id());

        return view('contents.profile.profileEdit', compact('title', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student = Student::getStudentById(Auth::id());

        $student->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear,
        ]);

        DB::table('fis11_students_logs')->insert([
            'student_id' => Auth::id(),
            'action' => 'edit',
            'path' => 'App\Http\Controllers\StudentsController@update',
            'description' => 'Edit profile with id ' . Auth::id(),
            'ip_address' => $request->ip(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect(route('profiles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student = Student::getStudentById(Auth::id());
        $student->delete();

        return redirect(route('main'));
    }
}
