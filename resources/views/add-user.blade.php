@extends('layouts.master')
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Add user</h3>
            </div>
            <div class="card-body">
                <form action="/users" method="post">
                    @csrf
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
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                        <label for="roles">Choose a role:</label>
                    </div>

                    <button class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
