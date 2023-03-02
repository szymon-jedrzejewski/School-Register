@extends('layouts.master')
@section('content')
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password">
                            <label for="password">Email</label>
                        </div>
                        <button class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
