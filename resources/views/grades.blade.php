<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School register</title>
</head>
<body>
<div class="container">
    <table class="table table-striped table-hover table-reflow">
        <thead>
        <tr>
            <th ><strong> Grade </strong></th>
            <th ><strong> Subject </strong></th>
            <th ><strong> Description </strong></th>
            <th ><strong> Teacher </strong></th>
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
