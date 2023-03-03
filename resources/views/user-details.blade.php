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
        <tr>
            <td>  {{ $user->name }} </td>
            <td>  {{ $user->email }} </td>
            <td>  {{ $user->role }} </td>
        </tr>
        </tbody>
        <div class="card-body">
            <form action="/register/public/users/update/{{ $user->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="dataTable-selector" name="roles" id="roles">
                        <option value="admin">admin</option>
                        <option value="teacher">teacher</option>
                        <option value="student">student</option>
                    </select>
                    <label for="roles">Choose a role:</label>
                </div>
                @if(count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <a href="http://localhost:8080/register/public/users/update/{{ $user->id }}">
                    <button class="btn btn-primary">Update</button>
                </a>
            </form>
        </div>
    </table>
@endsection
