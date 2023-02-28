<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index($slug)
    {
        $grades = Grade::join('users', 'grades.teacher', '=', 'users.id')
            ->where('student', '=', $slug)
            ->get();

        return view('grades', compact('grades'));
    }

    public function save(Request $request)
    {
        $grade = new Grade;
        $grade->grade = $request->grade;
        $grade->description = $request->description;
        $grade->subject = $request->subject;
        $grade->teacher = $request->teacher;
        $grade->student = $request->student;
    }
}
