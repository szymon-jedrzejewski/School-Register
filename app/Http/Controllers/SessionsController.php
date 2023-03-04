<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view('login');
    }

    public function login()
    {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        $role = Auth::user()->role;

        if($role == 'teacher')
        {
            return redirect('/grades/list');
        }

        if($role == 'student')
        {
            $redirectLink = '/grades/list/' . Auth::id();
            return redirect($redirectLink);
        }

        return redirect()->to('/users/list');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->to('/login');
    }
}
