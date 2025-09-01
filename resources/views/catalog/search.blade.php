@extends('catalog.layout')

@section('content')
    <div class="container py-4">
        <h1 class="mb-4">Search Results for "{{ $searchTerm }}"</h1>

        <!-- Search Form -->
      <form method="GET" action="{{ route('search') }}" class="row g-3 mb-4">
    <div class="col-md-6">
        <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
    </div>
    <div class="col-md-4">
        <select name="category" class="form-select">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Search</button>
    </div>
</form>

        <!-- Product Cards -->
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-3 mb-4 d-flex">
                    @include('catalog.products.card', ['product' => $product])
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No products found matching your search.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
