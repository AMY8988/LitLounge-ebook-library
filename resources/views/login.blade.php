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

    <div class="container-fluid  bg-secondary">
        <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-6 ">

                <form action="{{ route('user.loginCheck') }}" method="post">
                    @csrf
                    <div class="bg-white  p-3 px-4">
                        <div class="d-flex justify-content-between">
                            <h5 class=" text-center">LogIn Form</h5>
                            <a href="{{ route('home') }}" class="">
                                <i class="bi bi-backspace-reverse-fill text-primary"></i>
                            </a>
                        </div>
                        <hr>
                        <div class="row align-items-center my-4">
                            <label for="" class="col-4">Email Address</label>
                            <div class="col-8">
                                <input type="text" class="form-control " value="{{ old('email') }}" name="email"
                                    placeholder="email" @error('email') is-invalid @enderror>
                                @error('email')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row align-items-center my-4">
                            <label for="" class="col-4">Password</label>
                            <div class="col-8">
                                <input type="password" class="form-control " name="password" value="{{ old('password') }}"
                                    placeholder="password" @error('password') is-invalid @enderror>
                                @error('password')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row align-items-center my-4">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <button class="btn btn-primary" name="submit">Login</button>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>



</html>
