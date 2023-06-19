<!DOCTYPE html>
<html lang="en">

@extends('index')

@section('homeNav')
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand " href="{{ route('home') }}">
                <h3 class="fw-bold text-info">LitLounge</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 me-md-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 " aria-current="page" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 " href="{{ route('home.booklist') }}">Books</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li>

                                    <form action="{{ route('bookCate') }}" class="d-flex">
                                        <input hidden type="search" name="keyword" value="{{ $category->name }}">
                                        <button class="dropdown-item"> {{ $category->name }}
                                        </button>
                                    </form>

                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 " aria-current="page" href="#contact">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endsection

@section('homeContent')
<div class="container-fluid  bg-secondary">
    <div class="row my-0 my-lg-5 pb-0 pb-lg-5 d-flex justify-content-center align-items-center">
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
@endsection
