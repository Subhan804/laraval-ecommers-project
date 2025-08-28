@extends('catalog.layout')

@section('content')
    <div class="container mt-5">
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
                            <span class="badge  p-2 bg-secondary">{{ $product->category->name ?? 'Uncategorized' }}</span>
                        </p>

                        <p class="mb-2"><strong>Description:</strong></p>
                        <p class="text-muted">{{ $product->description ?? 'No description available.' }}</p>

                        <a href="{{ url('/') }}" class="btn btn-outline-primary mt-3">
                            <i class="bi bi-arrow-left"></i> Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection