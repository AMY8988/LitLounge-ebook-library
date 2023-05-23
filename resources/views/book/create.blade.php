@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Book</a></li>
            <li class="breadcrumb-item" aria-current="page">Data</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Add Book
                </h5>
            </div>
            <hr>
            <div class="row">
                <form action="" class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="col-12">
                                <label for="title" class="col-form-label fw-bold">Book Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="col-12">
                                <label for="title" class="col-form-label fw-bold">Book Cover Photo</label>
                                <input type="file" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="col-12">
                                <label  class="col-form-label fw-bold">Story</label>
                                <textarea type="text" rows="7" name="description"  class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label  class="col-form-label fw-bold">Categories</label>


                                @foreach ($categories as $category)
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault{{$category->id}}">
                                <label class="form-check-label" for="flexRadioDefault{{$category->id}}">
                                  {{ $category->name}}
                                </label>
                                </div>
                                @endforeach


                        </div>
                    </div>

                    <button class="btn btn-primary rounded-pill px-4 my-3 text-secondary">Add</button>
                </form>

            </div>



        </div>
    </div>
@endsection
