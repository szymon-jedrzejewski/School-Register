<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->back();
        }

        $users = User::all();

        return view('users', compact('users'));
    }

    public function delete($slug)
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->back();
        }

        $user = User::find($slug);
        $user->delete();

        return redirect('/users/list')->with('success', 'Stock updated.');
    }

    public function add()
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->back();
        }

        return view('add-user');
    }

    public function save()
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->back();
        }

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|max:255|regex:/(.*)@school-register\.com/i',
            'password' => 'required|min:6'
        ],
            [
                'required' => "This field is required!",
                'email' => "Mail has to be from school domain!",
                'regex' => "Mail has to be from school domain!",
                'password' => "Password must be longer than 6!"
            ]);

        $password = request('password');
        $name = request('name');
        $email = request('email');
        $role = request('roles');

        var_dump($password);
        $hashed = Hash::make($password, [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $hashed;
        $user->role = $role;

        $user->save();
        return redirect('/users/list')->with('success', 'Stock updated.');
    }

    public function show($slug)
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->back();
        }

        $user = User::find($slug);

        return view('user-details', compact('user'));
    }


    public function update($slug)
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->back();
        }

//        $this->validate(request(), [
//            'email' => 'email|max:255|regex:/(.*)@school-register\.com/i',
//            'password' => 'min:6'
//        ],
//            [
//                'email' => "Mail has to be from school domain!",
//                'password' => "Password must be longer than!"
//            ]);

        $user = User::find($slug);

        $password = request('password');
        $name = request('name');
        $email = request('email');
        $role = request('roles');

        $hashed = Hash::make($password, [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);

        if ($name != null) {
            $user->name = $name;
        }

        if ($email != null) {
            $user->email = $email;
        }

        if ($password != null) {
            $user->password = $hashed;
        }

        $user->role = $role;

        $user->save();
        return redirect('/users/list')->with('success', 'Stock updated.');
    }
}
