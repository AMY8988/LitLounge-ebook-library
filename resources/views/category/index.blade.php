@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('searchBar')
<form action="{{ route('category.index') }}" class="d-flex">
    <input class="form-control form-control-sm me-2 rounded-pill" type="search"
        placeholder="Search category" name="keyword" value="{{ request('keyword') }}" aria-label="Search">
    <button class="btn btn-sm btn-primary text-secondary px-3 rounded-pill"
        type="submit">search</button>
</form>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item text-info" aria-current="page">Categories</li>
            @if (request('keyword'))
            <li class="breadcrumb-item text-info" aria-current="page">search by {{ request('keyword') }}</li>
            @endif
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
                                        <a href="{{route('category.edit' , $category->id)}}" class="btn btn-sm btn-dark me-2"><i class="bi bi-pencil"></i></a>
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
                            <td colspan="5" class="text-center">No search data</td>
                         @endforelse
                    </tbody>
                </table>
                <div>
                    {{$categories->links()}}
                </div>
            </div>



        </div>
    </div>
@endsection

