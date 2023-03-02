<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function index($slug)
    {
        $grades = DB::table('grades')
            ->join('users', 'grades.teacher', '=', 'users.id')
            ->where('student', '=', $slug)
            ->get();

        return view('grades', compact('grades'));
    }

    public function add()
    {
        $students = DB::table('users')->where('role', '=', 'student')
            ->get();
        return view('add-grade', compact('students'));
    }

    public function save()
    {

        $name = request('student');

        $id = DB::table('users')->where('name', '=', $name)->first()->id;
        $grade = new Grade;

        $grade->grade = request('grade');
        $grade->teacher = 1;
        $grade->description = request('description');
        $grade->subject = request('subjects');
        $grade->student = $id;
        $grade->save();
    }
}
