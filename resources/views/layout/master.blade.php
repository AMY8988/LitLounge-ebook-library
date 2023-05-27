<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            @include('layout.aside')
            <div class="col-md-10 bg-secondary">
                <nav class="navbar navbar-light bg-secondary ">
                    <div class="container-fluid p-0">

                        {{-- <form action="{{ route('book.index') }}" class="d-flex">
                            <input class="form-control form-control-sm me-2 rounded-pill" type="search"
                                placeholder="Search" name="keyword" value="{{ request('keyword') }}" aria-label="Search">
                            <button class="btn btn-sm btn-primary text-secondary px-3 rounded-pill"
                                type="submit">search</button>
                        </form> --}}
                        @yield('searchBar')


                        <div class="dropdown ms-auto">
                            <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class=" d-inline-block">
                                    <img src="{{ asset('img/323948021_1219521351989625_30853411364063285_n.jpg') }}" class="rounded-pill" style="width: 50px;height:50px;" alt="">
                                </div>
                                <div class=" d-inline-block  mx-2">
                                    <h6 class="mb-0 text-secondary">{{ auth()->user()->name }}</h6>
                                    <span class="  text-secondary ">{{ auth()->user()->role->name }}</span>
                                </div>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('user.logout') }}">Log out</a></li>
                            </ul>
                        </div>

                    </div>
                </nav>

                @yield('content')
            </div>
        </div>

    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
@stack('script')
</html>
