{{-- No Use File--}}


{{-- <nav class="navbar navbar-light bg-secondary ">
    <div class="container-fluid p-0">

        <form action="{{ route('book.index') }}" class="d-flex">
            <input class="form-control form-control-sm me-2 rounded-pill" type="search"
                placeholder="Search" name="keyword" value="{{ request('keyword') }}" aria-label="Search">
            <button class="btn btn-sm btn-primary text-secondary px-3 rounded-pill"
                type="submit">search</button>
        </form>


        <div class="dropdown ms-auto">
            <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">

                <div class=" d-inline-block  mx-2">
                    <h6 class="mb-0 text-secondary">{{ auth()->user()->name }}</h6>
                    <span class="  text-secondary ">{{ auth()->user()->role->name }}</span>
                </div>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('user.logout') }}">Log out</a></li>
            </ul>
        </div>

    </div>
</nav> --}}
