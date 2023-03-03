@extends('layouts.master')
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Add user</h3>
            </div>
            <div class="card-body">
                <form action="/register/public/users/save" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" required>
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

                    <a href="http://localhost:8080/register/public/users/save">
                        <button class="btn btn-primary">Save</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
