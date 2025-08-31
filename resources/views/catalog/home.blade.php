@extends('catalog.layout')
@section('content')
<style>
    .hover-shadow:hover {
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12) !important;
        transform: translateY(-2px);
        transition: all 0.2s ease-in-out;
    }
</style>

<div id="homepageCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=1600&q=80"
                class="d-block w-100" alt="Fashion Accessories"
                style="height:400px; object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=1600&q=80"
                class="d-block w-100" alt="Casual Clothing"
                style="height:400px; object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=1600&q=80"
                class="d-block w-100" alt="Casual Clothing"
                style="height:400px; object-fit:cover;">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#homepageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homepageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container">
    <h2>Latest</h2>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4 d-flex">
            @include('catalog.products.card', ['product' => $product])
        </div>
        @endforeach
    </div>
</div>

@endsection