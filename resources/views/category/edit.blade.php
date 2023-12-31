@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
            <li class="breadcrumb-item text-info" aria-current="page">Edit Category</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Edit Category
                </h5>
            </div>
            <hr>
            <div class="row">
                <form action="{{ route('category.update' , $category->id)}}" method="post">
                    @method('put')
                    @csrf


                    <div class="col-12 col-md-4 d-inline-block">
                        <label for="title" class="col-form-label fw-bold">Category Name</label>
                        <input type="text" name="name" id="title" class="form-control @error('name') is-invalid

                        @enderror " placeholder="category name" value="{{ old('name' , $category->name) }}">
                        @error('name')
                        <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary rounded-pill px-4 my-3 text-secondary">Edit</button>
                    <a href="{{ route('dashboard') }}" class="btn  btn-primary rounded-pill text-secondary px-3">Cancel</a>

                </form>
            </div>





        </div>
    </div>
@endsection
