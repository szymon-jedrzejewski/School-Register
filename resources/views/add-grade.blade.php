@extends('layouts.master')
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Add grade</h3>
            </div>
            <div class="card-body">
                <form action="/grades" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input min="1" max="6" placeholder="Grade" type="number" class="form-control" name="grade"
                               id="grade">
                        <label for="grade">Grade</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input placeholder="Description" type="text" class="form-control" name="description"
                               id="description">
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input placeholder="Student" type="text" class="form-control" name="student" id="student">
                        <label for="student">Student</label>
                    </div>
                    <button class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
