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
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <form action="{{ route('home.booklist') }}" class="d-flex">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search books" name="keyword"
                        value="{{ request('keyword') }}" aria-label="Search">
                </form>
                <ul class="navbar-nav  mb-2 me-md-4 mb-lg-0">

                    <li class="nav-item dropdown">

                        <a class="nav-link px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li>

                                        <form action="{{ route('bookCate') }}" class="d-flex">
                                            <input  hidden type="search" name="keyword"
                                                value="{{ $category->name }}">
                                            <button class="dropdown-item"> {{ $category->name }}
                                            </button>
                                        </form>

                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 Active" aria-current="page" href="{{ route('home.booklist') }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 " aria-current="page" href="{{ route('home')}}">Home</a>
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
                        <ul class="dropdown-menu dropdown-menu-end bg-primary" aria-labelledby="dropdownMenuButton1">
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
    <section class="container py-5 bg-secondary ">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <div class=" ">
                    @if (request('keyword'))
                        <p class=" mx-4">Search by <span class="text-info">{{ request('keyword') }}</span> </p>
                    @endif
                </div>
                <div>
                    <h5 style="text-decoration: underline" class="">All Books<i class="bi bi-bookmark-fill mx-2"></i>
                    </h5>
                </div>
            </div>

            @forelse ($books as $book)

                <div class="col-12 col-sm-3 col-md-4 col-lg-3">

                    <div class="card border-0 bg-success mb-5" >
                        <img src="{{ Storage::url($book->coverPhoto) }}" class="card-img-top coverPhoto" alt="...">
                        <div class="card-body">
                            <div class="text-secondary">
                                <h6 class="fw-bold text-nowrap overflow-hidden">{{ Str::words($book->title, 4, '...') }}</h6>
                                <p class="text-nowrap overflow-hidden">by - {{ Str::words($book->user->name, 3, '...') }}</p>

                                <div class="d-flex overflow-hidden my-2">
                                    @forelse ($book->categories as $category)
                                        <span class=" badge bg-dark me-1">{{ $category->name }}</span>
                                    @empty
                                        <span class=" badge bg-info me-1">No Category</span>
                                    @endforelse
                                </div>

                                <a href="{{ route('page.bookshow' , $book->id) }}" class=" btn  rounded-1 btn-outline-primary border border-2 text-secondary px-3 mt-2 ">
                                    detail
                                </a>
                                <a href="{{ route('book.download' , $book->id) }}"
                                    class=" btn border border-2 rounded-2 btn-outline-primary text-secondary  px-3 mt-2 ">
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 bg-light d-flex justify-content-center align-items-center rounded">
                    <p class="mb-0 p-3  text-black-50">No Books by {{ request('keyword') }}</p>
                </div>
            @endforelse




        </div>
    </section>

@endsection
