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
                    Add Book {{ $book->title }}
                </h5>
            </div>
            <hr>
            <div class="row">
                @forelse ($book->categories as $category)
                    <p>{{ $category }}</p>
                @empty
                    <p>
                        no category
                    </p>
                @endforelse
            </div>



        </div>
    </div>
@endsection
