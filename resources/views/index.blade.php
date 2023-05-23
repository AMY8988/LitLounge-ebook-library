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
    <div class="container-fluid bg-secondary vh-100">
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
                                <a class="nav-link btn btn-sm border border-0 rounded-pill px-3 active"
                                    aria-current="page" href="#">Books</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link btn btn-sm border border-0 rounded-pill px-3 dropdown-toggle"
                                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    @foreach ($categories as $category)
                                    <li ><a class="dropdown-item " href="#">{{ $category->name }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm border border-0 rounded-pill px-3 " aria-current="page"
                                    href="#">Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button type="button" class="btn btn-sm btn-primary rounded-pill text-secondary px-3"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user.create') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="bg-white  p-3 px-4">

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
                                            <option value="">Admin</option>
                                            <option value="">Author</option>
                                            <option value="">Reader</option>
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
                                        <button class="btn btn-primary ">Register</button>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>
