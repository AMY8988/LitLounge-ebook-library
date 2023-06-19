{{-- No Use File --}}

{{-- @extends('layout.master')

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

            <h4>Book Name</h4>
            @forelse ($category->books as $book)
                <p> {{$book->title}} </p>
            @empty
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
                                Add Category
                            </h5>
                        </div>
                        <hr>
                        <div class="row">
                            <form action="{{ route('category.store')}}" method="post">
                                @csrf
                                <div class="col-12 col-md-4 d-inline-block">
                                    <label for="title" class="col-form-label fw-bold">Category Name</label>
                                    <input type="text" name="name" id="title" class="form-control" placeholder="category name" >
                                </div>
                                <button class="btn btn-primary rounded-pill px-4 my-3 text-secondary">Add</button>
                            </form>
                        </div>





                    </div>
                </div>
            @endsection

            @endforelse


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

                    </tbody>
                </table>
            </div>



        </div>
    </div>
@endsection
 --}}
