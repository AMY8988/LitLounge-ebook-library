<div class="col-md-2 bg-primary pt-3 p-0">
    <h3 class="mb-0 text-secondary px-2">LitLounge</h3>

    <div class=" mt-5">
        <a href="{{ route('home') }}" class="item-link d-block text-secondary p-2 ">Page</a>
        <a href="{{ route('dashboard') }}" class="item-link d-block text-secondary p-2">Home</a>
    </div>

    <div class=" mt-2">
        <p class="text-secondary m-0 px-2 text-info text-uppercase mb-2"><i class="bi bi-archive-fill me-1"></i>Manage Book</p>
        <a href="{{ route('book.create')}}" class="item-link d-block text-secondary p-2">Add book</a>
        <a href="{{ route('book.index') }}" class="item-link d-block text-secondary p-2">Book List</a>

    </div>

    @if (auth()->user()->role->id == 3)
    <div class=" mt-2">
        <p class="text-secondary m-0 px-2 text-info text-uppercase mb-2"><i class="bi bi-archive-fill me-1"></i>Manage Category</p>
        <a href="{{ route('category.create') }}" class="item-link d-block text-secondary p-2">Add category</a>
        <a href="{{ route('category.index') }}" class="item-link d-block text-secondary p-2">Category List</a>

    </div>

    <div class=" mt-2">
        <p class="text-secondary m-0 px-2 text-info text-uppercase mb-2">Manage User</p>
        <a href="{{ route('user.index') }}" class="item-link d-block text-secondary p-2">User List</a>
    </div>
    @endif
</div>
