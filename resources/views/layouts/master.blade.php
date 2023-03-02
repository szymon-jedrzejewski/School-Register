<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    {{--    <link href="/css/sticky-footer.css" rel="stylesheet">--}}
</head>

<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" >School register</a>
</nav>

<div class="container">
    <div class="row justify-content-center">
        @yield('content')
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">School register</span>
    </div>
</footer>

<script src="/js/jquery-3.1.1.slim.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
