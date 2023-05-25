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
                @include('layout.nav')

                @yield('content')
            </div>
        </div>

    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
@stack('script')
</html>
