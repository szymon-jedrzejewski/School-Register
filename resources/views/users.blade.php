@extends('layouts.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>  {{ $user->name }} </td>
                <td>  {{ $user->email }} </td>
                <td>  {{ $user->role }} </td>
                <td> <a href="http://localhost:8080/register/public/users/delete/{{ $user->id }}">
                        <button class="btn btn-primary">Delete</button>
                    </a>
                </td>
                <td> <a href="http://localhost:8080/register/public/users/edit/{{ $user->id }}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
