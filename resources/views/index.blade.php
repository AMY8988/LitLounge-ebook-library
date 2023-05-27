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


    <div class="container-fluid bg-secondary ">
        <div class="row">
             @yield('homeNav')
        </div>


        @yield('homeContent')

        {{-- <section class="row py-5 ">
            <div class="container">
                <div class="row ">
                    <div
                        class="col-12 col-md-5 my-5 my-md-0 d-flex text-center text-lg-start align-items-center justify-content-around">
                        <div class="home-content w-75">
                            <h3 class=" text-primary fw-bolder d-inline-block me-2">Welcome to </h3><h3 class=" fw-bolder d-inline-block  text-info">LitLounge</h3>
                            <p class=" fw-bold mt-3">
                               Your ultimate destination for e-books and digital reading pleasure.
                            </p>
                            <p class="mt-3">
                                We have curated a vast and diverse library of e-books, providing you with a gateway to explore countless worlds, stories, and knowledge right at your fingertips.
                            </p>
                            <button class=" btn border border-0 rounded-pill bg-primary text-white px-3 my-2 delay2">
                                Explore More
                            </button>
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

            <div
                class="col-12 col-md-7 my-5 my-md-0  text-center text-lg-start">
                <div class="row">
                    <div class=" col-12 col-md-6 home-content text-secondary ">
                        <hr class="text-secondary">
                        <h5 class=" fw-bolder  ">Access Anywhere, Anytime</h5>
                        <p class=" fw-bold mt-3">
                            With an e-book library, you can access your favorite books from anywhere, at any time, as long as you have an internet connection.
                        </p>
                    </div>
                    <div class=" col-12 col-md-6 home-content text-secondary ">
                        <hr class="text-secondary">
                        <h5 class=" fw-bolder  ">Access Anywhere, Anytime</h5>
                        <p class=" fw-bold mt-3">
                            With an e-book library, you can access your favorite books from anywhere, at any time, as long as you have an internet connection.
                        </p>
                    </div>
                    <div class=" col-12 col-md-6 home-content text-secondary ">
                        <hr class="text-secondary">
                        <h5 class=" fw-bolder  ">Access Anywhere, Anytime</h5>
                        <p class=" fw-bold mt-3">
                            With an e-book library, you can access your favorite books from anywhere, at any time, as long as you have an internet connection.
                        </p>
                    </div>
                    <div class=" col-12 col-md-6 home-content text-secondary ">
                        <hr class="text-secondary">
                        <h5 class=" fw-bolder  ">Access Anywhere, Anytime</h5>
                        <p class=" fw-bold mt-3">
                            With an e-book library, you can access your favorite books from anywhere, at any time, as long as you have an internet connection.
                        </p>
                    </div>
                </div>
            </div>

        </section> --}}

        {{-- <section class="container py-5 bg-secondary ">
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
                                    <span class=" badge bg-dark me-1">{{$category->name}}</span>
                                @empty

                                @endforelse
                                <span class=" badge bg-dark me-1">romance</span>
                                <span class=" badge bg-dark me-1">funny</span>
                                <span class=" badge bg-dark me-1">drama</span>

                                <button class="d-block btn border border-0 rounded-pill bg-primary text-white px-3 mt-5 delay2">
                                    detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="text-center">
                    <a href="" style="text-decoration: underline" class=" fw-bold">see more</a>
                </div>

            </div>
        </section> --}}

        <section class="row py-5 bg-primary" id="contact">
            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column gap-4 ms-5 text-secondary">
                    <a href="{{ route('home') }}" class="">
                        <h3 class="fw-bold text-info">LitLounge</h3>
                    </a>
                    <div class=" ">
                        <a href="" class="text-secondary"><i class="h4 p-2 bi bi-github"></i></a>
                        <a href="" class="text-secondary"><i class="h4 p-2 bi bi-linkedin"></i></a>
                        <a href="" class="text-secondary"><i class="h4 p-2 bi bi-facebook"></i></a>
                    </div>
                    <div class="">
                       <p>amymoe2321@gmail.com</p>
                       <p>09-000-000-00</p>
                       <p>Nay Pyi Taw , Zabu Thiri Township</p>
                    </div>
                </div>
            </div>

            <div
                class="col-12 col-md-7 my-5 my-md-0  text-center text-lg-start">
                <div class="w-75">
                    <p class=" mb-4 text-secondary ">Leave a comment</p>

                  <form class=" row">
                    <div class=" col-12 col-md-6 mb-2">
                      <input type="text"  placeholder="name" class="aa form-control rounded-pill  ">

                    </div>
                    <div class=" col-12 col-md-6">
                      <input type="text" placeholder="email address" class="aa form-control rounded-pill ">
                    </div>
                    <div class="col-12 ">
                      <textarea style="border-radius: 20px;" placeholder="comment" name="" class="aa form-control  mt-3" id="" cols="5" rows="5"></textarea>
                    </div>

                    <div class="">
                      <button name="submit" class="btn btn-sm btn-secondary rounded-pill my-3 px-4 py-2 ">Submit</button>
                    </div>

                  </form>
                </div>
            </div>

        </section>



    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
