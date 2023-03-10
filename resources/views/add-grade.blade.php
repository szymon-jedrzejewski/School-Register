@extends('layouts.master')
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Add grade</h3>
            </div>
            <div class="card-body">
                <form action="/register/public/grades" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input min="1" max="6" placeholder="Grade" type="number" class="form-control" name="grade"
                               id="grade" required>
                        <label for="grade">Grade</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input placeholder="Description" type="text" class="form-control" name="description"
                               id="description" required>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="dataTable-selector" name="subjects" id="subjects">
                            <option value="Math">Math</option>
                            <option value="English">English</option>
                            <option value="IT">IT</option>
                            <option value="PE">PE</option>
                            <option value="History">History</option>
                            <option value="Polish">Polish</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Biology">Biology</option>
                        </select>
                        <label for="subjects">Choose a subject:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="student" id="student" class="dataTable-selector">
                            @foreach($students as $student)
                                <option value="{{$student->name}}" id="{{$student->id}}">{{$student->name}}</option>
                            @endforeach
                        </select>
                        <label for="student">Student</label>
                    </div>
                    <button class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
