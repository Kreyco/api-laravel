<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();

        return $students;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Students::create($request->only("name", "identification", "is_active"));

        return $student;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Students $student)
    {
        $student = Students::find($student->id);

        return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $student)
    {
        $student->fill($request->only("name", "identification", "is_active"))->save();

        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $student)
    {
        $student->delete();

        return $student;
    }
}
