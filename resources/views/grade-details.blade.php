@extends('layouts.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Grade</th>
            <th scope="col">Subject</th>
            <th scope="col">Description</th>
            <th scope="col">Student</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>  {{ $grade->grade }} </td>
            <td>  {{ $grade->subject }} </td>
            <td>  {{ $grade->description }} </td>
            <td>  {{ $grade->student }} </td>
        </tr>
        </tbody>
        <div class="card-body">
            <form action="/register/public/grades/update/{{ $grade->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input min="1" max="6" placeholder="Grade" type="number" class="form-control" name="grade"
                           id="grade">
                    <label for="grade">Grade</label>
                </div>
                <div class="form-floating mb-3">
                    <input placeholder="Description" type="text" class="form-control" name="description"
                           id="description">
                    <label for="description">Description</label>
                </div>
                <a href="http://localhost:8080/register/public/grades/update/{{ $grade->id }}">
                    <button class="btn btn-primary">Update</button>
                </a>
            </form>

        </div>
    </table>
@endsection
