{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    --}}
{{--    <title>Home Page</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--@if (Route::has('login'))--}}
{{--    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}


{{--<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">--}}
{{--    <div class="flex items-center flex-shrink-0 text-white mr-6">--}}
{{--        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>--}}
{{--        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>--}}
{{--    </div>--}}
{{--    <div class="block lg:hidden">--}}
{{--        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">--}}
{{--            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">--}}
{{--        <div class="text-sm lg:flex-grow">--}}
{{--            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">--}}
{{--                Docs--}}
{{--            </a>--}}
{{--            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">--}}
{{--                Examples--}}
{{--            </a>--}}
{{--            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">--}}
{{--                Blog--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--</body>--}}
{{--</html>--}}



    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <li class="nav-item">

                            <a href="{{ url('/dashboard') }}" class="nav-link active">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>

                            @if (Route::has('register'))

                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>

                            @endif
                        @endauth
                    </div>
                @endif
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<table class="table table-dark table-striped my-4">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">body</th>
    </tr>
    </thead>
    <tbody>
    @foreach($post as $posts)
    <tr>
        <th scope="row">1</th>
        <td>{{$posts->title}}</td>
        <td>{{$posts->body}}</td>
    </tr>
    @endforeach
    {{-- {{$post->links()}} --}}

    </tbody>
</table>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>




