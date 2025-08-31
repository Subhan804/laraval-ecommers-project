@extends('catalog.layout')

@section('content')
<div class="container mt-5">
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
    <h2 class="mb-4">{{ $product->name }}:</h2>

    <div class="card shadow-sm border-0">
        <div class="row g-0">
            <!-- Product Image -->
            <div class="col-md-4 text-center p-4 d-flex align-items-center justify-content-center">
                @if($product->image)
                <div style="width: 250px; height: 250px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 8px;">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                @else
                <div class="d-flex align-items-center justify-content-center" style="width: 250px; height: 250px; background: #f8f9fa; border-radius: 8px;">
                    <span class="text-muted fst-italic">No image available.</span>
                </div>
                @endif
            </div>

            <!-- Product Details -->
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title text-primary">${{ number_format($product->price, 2) }}</h4>

                    <p class="mb-2">
                        <strong>Category:</strong>
                        <span class="badge p-2 bg-secondary">{{ $product->category->name ?? 'Uncategorized' }}</span>
                    </p>

                    <p class="mb-2"><strong>Description:</strong></p>
                    <p class="text-muted">{{ $product->description ?? 'No description available.' }}</p>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-between mt-4">
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Add to Cart</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection