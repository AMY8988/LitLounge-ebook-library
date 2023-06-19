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
    <section class="container py-5 bg-secondary ">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">

                {{-- <div>
                    <h5 style="text-decoration: underline" class="my-4">Book Detail<i
                            class="bi bi-bookmark-fill mx-2"></i>
                    </h5>
                </div> --}}
            </div>

            <div class="row">

                <div class="col-12 col-md-8">
                    <img src="{{ Storage::url($book->coverPhoto) }}" class="coverPhoto2" alt="...">
                    <div class="d-flex flex-column border-0 my-5">
                        <div class="">
                            <h5 class="fw-bold text-nowrap ">{{ $book->title }}</h5>
                            <span class=" text-black-50 ">published {{ $book->created_at->diffForHumans() }}</span>
                            <p class="text-nowrap mt-3">by - {{ $book->user->name }}</p>
                            <div class="d-flex ">
                                @forelse ($book->categories as $category)
                                    <span class=" badge bg-dark me-1">{{ $category->name }}</span>
                                @empty
                                    <span class=" badge bg-info me-1">No Category</span>
                                @endforelse
                            </div>
                            <p class="my-3">{{ $book->description }}</p>

                            <a href="{{ route('book.download' , $book->id) }}"
                                class=" btn border border-0 rounded-4 bg-primary text-secondary px-3 mt-2 ">
                                Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 ">
                    <div>
                        <h5 class="">Related Book<i class="bi bi-bookmark-fill mx-2"></i></h5>
                    </div>
                    @forelse ($relatedBooks as $book)
                    <div class="bg-success d-flex gap-4 my-4">
                        <div class="">
                            <img src="{{ Storage::url($book->coverPhoto) }}" class="related-cover-photo" alt="">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="text-secondary">
                                <h5 class="fw-bold">{{ $book->title }}</h5>
                                <p>by - {{ $book->user->name }}</p>

                                <a href="{{ route('page.bookshow' , $book->id) }}"
                                    class=" btn border border-0 rounded-pill bg-primary text-white  ">
                                    detail
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="bg-light bg-opacity-50 p-2 rounded my-2">
                            <p class="mb-0 text-black-50">No Result</p>
                        </div>
                    @endforelse
                    <div class="">
                        <a href="{{ route('home.booklist') }}" style="text-decoration: underline" class=" fw-bold">see more</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
