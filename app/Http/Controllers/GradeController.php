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

    public function add()
    {
        return view('add-grade');
    }

    public function save(Request $request)
    {
        dd($request);
    }
}
