<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>School register</title>
</head>
<body>
<div class="container">
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
</div>
</body>
</html>
