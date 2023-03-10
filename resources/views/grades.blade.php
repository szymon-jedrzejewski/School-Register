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
        @foreach($grades as $value)
            <tr>
                <td>  {{ $value->grade }} </td>
                <td>  {{ $value->subject }} </td>
                <td>  {{ $value->description }} </td>
                <td>  {{ $value->student }} </td>
                <td><a href="http://localhost:8080/register/public/grades/edit/{{ $value->id }}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
                <td><a href="http://localhost:8080/register/public/grades/delete/{{ $value->id }}">
                        <button class="btn btn-primary">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
