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
                @auth
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                            <div class=" d-inline-block p-2 mx-2">
                                <h6 class="mb-0 text-secondary">{{ auth()->user()->name }}</h6>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end  bg-primary" aria-labelledby="dropdownMenuButton1">
                            @if (auth()->user()->role->id >= 2)
                                <li><a class="dropdown-item text-secondary" href="{{ route('dashboard') }}">dashboard</a></li>
                            @endif
                            <li><a class="dropdown-item text-secondary" href="{{ route('user.Edit' , auth()->user()->id ) }}">Edit account</a></li>
                            <li><a class="dropdown-item text-secondary" href="{{ route('user.logout') }}">Log out</a></li>

                        </ul>
                    </div>
                @endauth
                @guest
                    <a href="{{ route('register') }}" class=" btn btn-primary rounded rounded-pill me-2">
                        Sign Up
                    </a>
                    <a href="{{ route('login') }}" class=" btn btn-outline-primary rounded rounded-pill">
                        Login
                    </a>
                @endguest
            </div>
        </div>
    </nav>
@endsection

@section('homeContent')
    <section class="row py-5 ">
        <div class="container">
            <div class="row ">
                <div
                    class="col-12 col-md-5 my-5 my-md-0 d-flex text-center text-lg-start align-items-center justify-content-around">
                    <div class="home-content w-75">
                        <h3 class=" text-primary fw-bolder d-inline-block me-2">Welcome to </h3>
                        <h3 class=" fw-bolder d-inline-block  text-info">LitLounge</h3>
                        <p class=" fw-bold mt-3">
                            Your ultimate destination for e-books and digital reading pleasure.
                        </p>
                        <p class="mt-3">
                            We have curated a vast and diverse library of e-books, providing you with a gateway to explore
                            countless worlds, stories, and knowledge right at your fingertips.
                        </p>
                        <a href="{{ route('home.booklist') }}"
                            class=" btn border border-0 rounded-pill bg-primary text-white px-3 my-2 delay2">
                            Explore More
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class=" home-img ms-5">
                        <img src="{{ asset('img/Group 5.png') }}" class=" img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row py-5 bg-primary">
        <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
            <div class=" ms-5">
                <img src="{{ asset('img/perfecto-capucine-2gllPE42ouU-unsplash.jpg') }}" class=" img-fluid" alt="">
            </div>
        </div>

        <div class="col-12 col-md-7 my-5 my-md-0  text-center text-lg-start">
            <div class="row">
                <div class=" col-12 col-md-6 home-content text-secondary ">
                    <hr class="text-secondary">
                    <h5 class=" fw-bolder  ">Access Anywhere, Anytime</h5>
                    <p class=" fw-light mt-3 ">
                        With an e-book library, you can access your favorite books from anywhere, at any time, as long as
                        you have an internet connection.
                    </p>
                </div>
                <div class=" col-12 col-md-6 home-content text-secondary ">
                    <hr class="text-secondary">
                    <h5 class=" fw-bolder  ">Portability</h5>
                    <p class=" fw-light mt-3 ">
                        E-books are digital files that can be stored and accessed on electronic devices such as e-readers,
                        tablets, smartphones, or computers.
                    </p>
                </div>
                <div class=" col-12 col-md-6 home-content text-secondary ">
                    <hr class="text-secondary">
                    <h5 class=" fw-bolder  ">Cost-Effective:</h5>
                    <p class=" fw-light mt-3 ">
                        E-books are often more affordable than physical books, and many e-book libraries offer subscription
                        models or lending services, allowing you to access a wide range of titles at a fraction of the cost.
                    </p>
                </div>
                <div class=" col-12 col-md-6 home-content text-secondary ">
                    <hr class="text-secondary">
                    <h5 class=" fw-bolder  ">Eco-Friendly</h5>
                    <p class=" fw-light mt-3 ">
                        E-books are environmentally friendly, as they require no paper or physical production. By opting for
                        e-books, you contribute to reducing deforestation.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="container py-5 bg-secondary ">
        <div class="row">
            <div>
                <h3 class="mx-4">Popular Book<i class="bi bi-bookmark-fill mx-2"></i></h3>
            </div>

            @foreach ($books as $book)
                <div class="col-12 col-md-6 ">
                    <div class="bg-success d-flex gap-4 m-4">
                        <div class="">
                            <img src="{{ Storage::url($book->coverPhoto) }}" class="coverPhoto" alt="">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="text-secondary">
                                <h5 class="fw-bold">{{ $book->title }}</h5>
                                <p>by - {{ $book->user->name }}</p>

                                @forelse ($book->categories as $category)
                                    <span class=" badge bg-dark me-1 ">{{ $category->name }}</span>
                                @empty
                                @endforelse

                                <br>
                                <a href="{{ route('page.bookshow' , $book->id) }}"
                                    class=" btn border border-0 rounded-pill bg-primary text-white  mt-5 ">
                                    detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="text-center">
                <a href="{{ route('home.booklist') }}" style="text-decoration: underline" class=" fw-bold">see more</a>
            </div>

        </div>
    </section>
@endsection
