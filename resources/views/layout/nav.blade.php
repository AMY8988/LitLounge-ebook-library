<nav class="navbar navbar-light bg-secondary ">
    <div class="container-fluid p-0">
        <form class="d-flex">
            <input class="form-control form-control-sm me-2 rounded-pill" type="search"
                placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-primary text-secondary px-3 rounded-pill"
                type="submit">search</button>
        </form>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class=" d-inline-block">
                    <img src="{{ asset('img/323948021_1219521351989625_30853411364063285_n.jpg') }}" class="rounded-pill" style="width: 50px;height:50px;" alt="">
                </div>
                <div class=" d-inline-block  mx-2">
                    <h6 class="mb-0 text-secondary">AmyMoe</h6>
                    <span class="  text-secondary ">Admin</span>
                </div>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
        </div>

    </div>
</nav>
