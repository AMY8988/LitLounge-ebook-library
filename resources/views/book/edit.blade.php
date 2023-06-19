@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('book.index')}}">Books</a></li>
            <li class="breadcrumb-item text-info" aria-current="page">Edit Book</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Edit Book
                </h5>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 ">
                    <form action="{{ route('book.update' , $book->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="col-12">
                                            <label class="col-form-label fw-bold">Book Cover Photo</label>
                                            <input type="file" name="coverPhoto" value="{{ old('coverPhoto' , $book->coverPhoto) }}"
                                            class="form-control  @error('coverPhoto') is-invalid @enderror ">
                                            @error('coverPhoto')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="title" class="col-form-label fw-bold">Book Title</label>
                                            <input type="text" name="title" id="title"
                                            class="form-control @error('title') is-invalid @enderror" value="{{ old('title' , $book->title) }}" >
                                            @error('title')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="col-12">
                                            <label class="col-form-label fw-bold">Description</label>
                                            <textarea type="text" rows="7" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description' , $book->description) }}"</textarea>
                                            @error('description')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="title" class="col-form-label fw-bold">Book(File Upload)</label>
                                            <input type="file" name="fileUpload" value="{{ old('fileUpload' , $book->fileUpload)}}" class="form-control @error('fileUpload') is-invalid @enderror">
                                            @error('fileUpload')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-12 col-md-4">
                                        <label class="col-form-label fw-bold">Categories</label>
                                        @foreach ($categories as $category)
                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="category_id[]"
                                                    id="flexRadioDefault{{ $category->id }}"
                                                    @foreach ($book->categories as $c)
                                                        {{ $category->id == $c->id?'checked':''; }}
                                                    @endforeach
                                                >
                                                <label class="form-check-label" for="flexRadioDefault{{ $category->id }}">
                                                    {{ $category->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                        <button class="btn btn-primary rounded-pill px-4 my-3 text-secondary">Edit</button>
                    <a href="{{ route('dashboard') }}" class="btn  btn-primary rounded-pill text-secondary px-3">Cancel</a>

                    </form>
                </div>



            </div>



        </div>
    </div>
@endsection
