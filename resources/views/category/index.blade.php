@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item" aria-current="page">Categroy List</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Category List
                </h5>
            </div>
            <hr>


            <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Control</th>
                            <th>Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td class="now">
                                    <div class="d-flex ">
                                        <a href="{{route("category.edit", $category->id)}}" class="btn btn-sm btn-dark me-2"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route("category.destroy" , $category->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" id="del" class="btn btn-sm btn-dark "><i class="bi bi-trash3"></i></button>
                                        </form>

                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 text-black-50"><i class="bi bi-calendar pe-2"></i>{{ $category->created_at->format('d M Y') }}</p>
                                    <p class="mb-0 text-black-50"><i class="bi bi-clock-fill pe-2"></i>{{ $category->created_at->format('h:m A') }}</p>
                                </td>
                            </tr>
                        @empty

                         @endforelse
                    </tbody>
                </table>
            </div>



        </div>
    </div>
@endsection

