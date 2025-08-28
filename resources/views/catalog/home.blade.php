@extends('catalog.layout')

@section('content')
<style>
    .product-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .product-card-img {
        height: 200px;
        object-fit: cover;
    }
    .product-card-body {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>
<h2>Latest</h2>
<div class="row">
    @foreach($products as $product)
        <div class="col-md-3 mb-4 d-flex">
            <div class="card product-card w-100">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top product-card-img" alt="{{ $product->name }}">
                @endif
                <div class="card-body product-card-body">
                    <div>
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div>
                        <p>${{ $product->price }}</p>
                        <a href="{{ route('catalog.product.show', $product->id) }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
