@extends('layouts.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Grade</th>
            <th scope="col">Subject</th>
            <th scope="col">Description</th>
            <th scope="col">Teacher</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grades as $value)
            <tr>
                <td>  {{ $value->grade }} </td>
                <td>  {{ $value->subject }} </td>
                <td>  {{ $value->description }} </td>
                <td>  {{ $value->name }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
