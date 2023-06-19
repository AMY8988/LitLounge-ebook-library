@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('searchBar')
<form action="{{ route('user.index') }}" class="d-flex">
    <input class="form-control form-control-sm me-2 rounded-pill" type="search"
        placeholder="Search user" name="keyword" value="{{ request('keyword') }}" aria-label="Search">
    <button class="btn btn-sm btn-primary text-secondary px-3 rounded-pill"
        type="submit">search</button>
</form>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item text-info" aria-current="page">Edit User</li>

        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <!-- add-item header -->
            <div class="d-flex justify-content-between align-items-center">
                <h5 class=" mb-0 text-primary">
                    Edit User Information
                </h5>
            </div>
            <hr>


            <div class="row">
                <div class="col-12 col-md-6 ">





                    <form action="{{ route('user.Update' , $user->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="bg-white  p-3 px-4">


                            <div class="row align-items-start my-4">
                                <label class="col-4">Name</label>
                                <div class="col-8">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name' , $user->name) }}" placeholder="name" name="name">
                                    @error('name')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row align-items-start my-4">
                                <label for="" class="col-4">Email Address</label>
                                <div class="col-8">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror "
                                        value="{{ old('email' , $user->email) }}" name="email" placeholder="email">
                                    @error('email')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            {{-- <div class="row align-items-start my-4">
                                <label for="" class="col-4">Password</label>
                                <div class="col-8">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" name="password" placeholder="password">
                                    @error('password')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row align-items-start my-4">
                                <label for="" class="col-4">Confirm Password</label>
                                <div class="col-8">
                                    <input type="password" class="form-control " name="password_confirmation"
                                        placeholder="confirm password">
                                </div>
                            </div> --}}


                            <div class="row align-items-start my-4">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button class="btn btn-sm btn-primary rounded-pill text-secondary px-3">Update</button>
                                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary rounded-pill text-secondary px-3">Cancel</a>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>



        </div>
    </div>
@endsection




