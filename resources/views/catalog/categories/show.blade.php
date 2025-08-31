@extends('catalog.layout')

@section('content')
<div class="category-card position-relative text-center text-white mb-4"
    style="height: 400px; overflow: hidden;">

    @if ($category->image)
    <img src="{{ asset('storage/' . $category->image) }}"
        alt="{{ $category->name }}"
        class="w-100 h-100 object-fit-cover"
        style="filter: brightness(60%) blur(4px);">
    @endif

    <div class="position-absolute top-50 start-50 translate-middle px-3">
        <h2 class="fw-bold">{{ $category->name }}</h2>
        <p class="lead">{{ $category->description }}</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-4">
        @forelse ($category->products ?? [] as $product)
        <div class="col-md-3 mb-4 d-flex">
            @include('catalog.products.card', ['product' => $product])
        </div>
        @empty
        <div class="col-12 text-center">
            <p class="text-muted fs-5">No products available in this category.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection