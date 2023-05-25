@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Book</a></li>
            <li class="breadcrumb-item" aria-current="page">Book List</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Book List
                </h5>
            </div>
            <hr>
            <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>

                            <th>Book Name</th>
                            <th>Cateogries</th>
                            <th>Description</th>
                            @if (auth()->user()->role->id == 3)<th>Author</th>@endif
                            <th>Control</th>

                    </thead>
                    <tbody>
                        @forelse($books as $book)


                            <tr>

                                <td>
                                    {{ $book->title }}
                                </td>
                                <td style="width: 20%">
                                    @forelse ($book->categories as $category)
                                        <span class=" badge bg-success rounded-pill">{{ $category->name}}</span>
                                    @empty
                                    <span class=" badge bg-info rounded-pill">No Cateogries</span>
                                    @endforelse
                                </td>
                                <td style="width: 30%">
                                    {{ Str::words($book->description,5, '...') }}
                                </td>
                                @if (auth()->user()->role->id == 3)
                                <td>
                                    {{ $book->user->name }}
                                </td>
                                @endif
                                <td>
                                    <div class="d-flex ">
                                        <a href="{{route('book.show' , $book->id)}}" class="btn btn-sm btn-dark me-2"><i class="bi bi-chat-square-dots-fill"></i></a>
                                        <a href="{{route('book.edit' , $book->id)}}" class="btn btn-sm btn-dark me-2"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route("book.destroy" , $book->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" id="del" class="btn btn-sm btn-dark "><i class="bi bi-trash3"></i></button>
                                        </form>

                                    </div>
                                </td>

                            </tr>



                        @empty

                         @endforelse
                    </tbody>
                </table>

                <div>
                    {{$books->links() }}
                </div>
            </div>



        </div>
    </div>
@endsection
