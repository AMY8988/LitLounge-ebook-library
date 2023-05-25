<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LitLounge</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>


    <div class="container-fluid bg-secondary ">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <div class="container-fluid">
                    <a class="navbar-brand " href="#">
                        <h3 class="fw-bold text-primary">LitLounge</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 me-md-4 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link px-3 Active"
                                    aria-current="page" href="#">Books</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link px-3 dropdown-toggle"
                                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    @foreach ($categories as $category)
                                        <li><a class="dropdown-item " href="#">{{ $category->name }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 " aria-current="page"
                                    href="#">Contact Us</a>
                            </li>
                        </ul>
                        @auth
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                    <div class=" d-inline-block p-2 mx-2">
                                        <h6 class="mb-0 text-secondary">{{ auth()->user()->name }}</h6>
                                    </div>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">Log out</a></li>
                                </ul>
                            </div>
                        @endauth
                        @guest

                            <a href="{{ route('register') }}" class=" btn btn-primary rounded rounded-pill">Sign In</a>

                        @endguest
                    </div>
                </div>
            </nav>
        </div>


            <div class="container p-4 vh-100">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <h6>Start your reading journey today </h6>
                        <h3 class=" fw-bolder">At LitLounge.</h3>
                        <p style="text-decoration: underline">Dive into captivating stories, knowledge, and adventures</p>
                    </div>
                    <div class="col-12 col-md-7"></div>
                </div>
            </div>





    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
