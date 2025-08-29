@extends('catalog.layout')

@section('content')
    @if (session('success'))
        <div id="cart-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <a href="{{ route('cart.index') }}" class="alert-link ">View Cart</a>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            setTimeout(() => {
                const alert = document.getElementById('cart-alert');
                if (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('fade');
                    setTimeout(() => alert.remove(), 500); // remove from DOM after fade
                }
            }, 4000); // 4 seconds
        </script>
    @endif
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
        @foreach ($products as $product)
            <div class="col-md-3 mb-4 d-flex">
                <div class="card product-card w-100">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-card-img"
                            alt="{{ $product->name }}">
                    @endif
                    <div class="card-body product-card-body">
                        <div>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div>
                            <p>${{ $product->price }}</p>
                            <a href="{{ route('catalog.product.show', $product->id) }}" class="btn btn-primary">View</a>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Add to Cart</button>
                            </form>
                            <form action="{{ route('catalog.order.store', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Order</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
