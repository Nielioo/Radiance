<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Profile";
        $student = Student::getStudentById(Auth::id());

        $username = $student->username;
        $name = $student->name;
        $email = $student->email;
        $school = $student->school;
        $city = $student->city;
        $birthyear = $student->birthyear;

        return view('contents.profile.profile', compact('title', 'username', 'name', 'email', 'school', 'city', 'birthyear'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $title = "Edit Profile";
        $student = Student::getStudentById(Auth::id());

        return view('courseEdit', compact('title', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $title = "Edit Profile";
        $student = Student::getStudentById(Auth::id());

        $student->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear,
        ]);
        return redirect(route('profile.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $student = Student::getStudentById(Auth::id());
        $student->delete();

        return redirect(route('home'));
    }
}
