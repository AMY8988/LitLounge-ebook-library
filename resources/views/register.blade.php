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





                <form action="{{ route('user.registered') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-white  p-3 px-4">

                        <div class="d-flex justify-content-between">
                            <h5 class=" text-center">Sign Up</h5>
                            <a href="{{ route('home') }}" class="">
                                <i class="bi bi-backspace-reverse-fill text-primary"></i>
                            </a>
                        </div>
                        <hr>
                        <div class="row align-items-start my-4">
                            <label class="col-4">Name</label>
                            <div class="col-8">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="name" name="name">
                                @error('name')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row align-items-start my-4">
                            <label for="" class="col-4">Email Address</label>
                            <div class="col-8">
                                <input type="email" class="form-control @error('email') is-invalid @enderror "
                                    value="{{ old('email') }}" name="email" placeholder="email">
                                @error('email')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row align-items-start my-4">
                            <label for="" class="col-4">Role</label>
                            <div class="col-8">
                                <select name="role_id" class=" form-select" id="">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-start my-4">
                            <label for="" class="col-4">Password</label>
                            <div class="col-8">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" name="password" placeholder="password">
                                @error('password')
                                    <div class=" invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row align-items-start my-4">
                            <label for="" class="col-4">Confirm Password</label>
                            <div class="col-8">
                                <input type="password" class="form-control " name="password_confirmation"
                                    placeholder="confirm password">
                            </div>
                        </div>


                        <div class="row align-items-start my-4">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <button class="btn btn-sm btn-primary rounded-pill text-secondary px-3">SignUp</button>
                                <a href="{{ route('login') }}" style="text-decoration: underline" class="">
                                    Login
                                </a>
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
