<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>
    <div class="container-fluid">
        <div class="row vh-100">
            @include('layout.aside')
            <div class="col-md-10 bg-secondary">
                <nav class="navbar navbar-light bg-secondary ">
                    <div class="container-fluid p-0">

                        @yield('searchBar')


                        <div class="dropdown ms-auto">
                            <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <div class=" d-inline-block  mx-2">
                                    <h6 class="mb-0 text-secondary">{{ auth()->user()->name }}</h6>
                                    <span class="  text-secondary ">{{ auth()->user()->role->name }}</span>
                                </div>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-primary" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item text-secondary" href="{{ route( 'user.Edit' , auth()->user()->id ) }}">Edit account</a></li>
                                <li><a class="dropdown-item text-secondary" href="{{ route('user.logout') }}">Log out</a></li>
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
