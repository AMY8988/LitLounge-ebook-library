@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Book</a></li>
            <li class="breadcrumb-item"><a href="{{ route('book.index') }}">Book Lists</a></li>
            <li class="breadcrumb-item" aria-current="page">Book Detail</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Book Detail
                </h5>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 mx-2 d-flex" style="gap: 5%">
                    <div>
                        <img src="{{ Storage::url($book->coverPhoto) }}" class="coverPhoto " alt="">
                    </div>
                    <div>
                        <table class="table ">

                            <tr>
                                <td>Book Name -</td>
                                <td>{{ $book->title }}</td>
                            </tr>
                            <tr>
                                <td>Categories -</td>
                                <td>
                                    @forelse ($book->categories as $category)
                                        <span class=" badge bg-success">{{ $category->name }}</span>
                                    @empty
                                        <span class=" badge bg-info">No category</span>
                                    @endforelse
                                </td>
                            </tr>
                            <tr>
                                <td>Description -</td>
                                <td>{{ $book->description }}</td>
                            </tr>
                            <tr>
                                <td>Created_at -</td>
                                <td>{{ $book->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Updated_at -</td>
                                <td>{{ $book->updated_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
