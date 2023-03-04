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
    <a class="navbar-brand">School register</a>

    <div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" id="navbarSupportedContent">
        <ul class="dropdown-menu dropdown-menu-end show" aria-labelledby="navbarDropdown" data-bs-popper="none">
            @if( auth()->check() )

                <input type="hidden" {{ $role = auth()->user()->role}}>

                @if($role == 'admin')
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/users/list">Users</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/grades/list">Grades</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/users/add">Add user</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/grades/add">Add grade</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/logout">Logout</a>
                    </li>
                @endif

                @if($role == 'teacher')
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/grades/list">Grades</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/grades/add">Add grade</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/logout">Logout</a>
                    </li>
                @endif

                @if($role == 'student')
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/grades/list/{{ auth()->user()->id }}">My grades</a>
                    </li>
                    <li class="dropdown-item nav-item">
                        <a class="nav-link" href="/register/public/logout">Logout</a>
                    </li>
                @endif
            @else
                <li class="dropdown-item nav-item">
                    <a class="nav-link" href="/register/public/login">Login</a>
                </li>
            @endif

            {{--            @if( auth()->check() )--}}
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>--}}
            {{--                </li>--}}
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link" href="/logout">Log Out</a>--}}
            {{--                </li>--}}
            {{--            @else--}}
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link" href="/login">Log In</a>--}}
            {{--                </li>--}}
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link" href="/register">Register</a>--}}
            {{--                </li>--}}
            {{--            @endif--}}
        </ul>
    </div>
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
