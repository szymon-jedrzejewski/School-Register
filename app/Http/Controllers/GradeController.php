<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($slug)
    {
        if (auth()->user()->role != 'student') {
            return redirect()->back();
        }

        $grades = DB::table('grades')
            ->join('users', 'grades.teacher', '=', 'users.id')
            ->where('student', '=', $slug)
            ->get();

        return view('student-grades', compact('grades'));
    }

    public function show()
    {
        if (auth()->user()->role == 'student') {
            return redirect()->back();
        }

        $grades = DB::table('grades')
            ->get();

        return view('grades', compact('grades'));
    }

    public function details($slug)
    {
        if (auth()->user()->role == 'student') {
            return redirect()->back();
        }

        $grade = Grade::find($slug);

        return view('grade-details', compact('grade'));
    }

    public function update($slug)
    {
        if (auth()->user()->role == 'student') {
            return redirect()->back();
        }

        $grade = Grade::find($slug);


        $gradeValue = request('grade');
        if ($gradeValue != null) {
            $grade->grade = $gradeValue;
        }

        $description = request('description');

        if ($description != null) {
            $grade->description = $description;
        }

        $grade->save();

        return redirect('/grades/list')->with('success', 'Stock updated.');
    }

    public function delete($slug)
    {
        if (auth()->user()->role == 'student') {
            return redirect()->back();
        }

        $grade = Grade::find($slug);
        $grade->delete();

        return redirect('/grades/list')->with('success', 'Stock updated.');
    }

    public function add()
    {
        if (auth()->user()->role == 'student') {
            return redirect()->back();
        }

        $students = DB::table('users')->where('role', '=', 'student')
            ->get();

        return view('add-grade', compact('students'));
    }

    public function save()
    {
        if (auth()->user()->role == 'student') {
            return redirect()->back();
        }

        $name = request('student');

        $id = DB::table('users')->where('name', '=', $name)->first()->id;
        $grade = new Grade;

        $grade->grade = request('grade');
        $grade->teacher = auth()->id();
        $grade->description = request('description');
        $grade->subject = request('subjects');
        $grade->student = $id;
        $grade->save();

        return redirect('/grades/list')->with('success', 'Stock updated.');
    }
}
