@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')


    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Dashboard Home
                </h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between ">

                <div class="col-12 p-2 col-md-6 col-lg-6 col-xl-4  ">
                    <div class="card mb-2 status-card" onclick="go('https://google.com')">
                        <div class="card-body  rounded bg-light">
                            <div class="row ">
                                <div class="col-5 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-book fs-1 text-primary"></i>
                                </div>
                                <a href=" {{ route('book.index') }}" class="col-7">
                                    <span class="h5 counter-up fw-bolder">
                                        {{ count($books) }}
                                    </span>
                                    <p class="text-black-50 fw-bold m-0 ">Total Books</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2 col-md-6 col-lg-6 col-xl-4  ">
                    <div class="card mb-2 status-card">
                        <div class="card-body rounded bg-light">
                            <div class="row ">
                                <div class="col-5 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-people fs-1 text-primary"></i>
                                </div>
                                <a href="{{ route('user.index') }}" class="col-7">
                                    <span class="h5 counter-up fw-bolder">
                                        {{ count($users) }}
                                    </span>
                                    <p class="text-black-50 fw-bold m-0 ">Total Users</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-2 col-md-6 col-lg-6 col-xl-4  ">
                    <div class="card mb-2 status-card" >
                        <div class="card-body rounded bg-light">
                            <div class="row ">
                                <div class="col-5 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-boxes fs-1 text-primary"></i>
                                </div>
                                <a href="{{ route('category.index') }}" class="col-7">
                                    <span class="h5 counter-up fw-bolder">
                                        {{ count($categories) }}
                                    </span>
                                    <p class="text-black-50 fw-bold m-0 ">Total Categories</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
@endsection
