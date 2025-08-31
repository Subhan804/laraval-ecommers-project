@extends('catalog.layout')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-primary fw-bold">
        <i class="bi bi-cart4 me-2"></i> Your Cart
    </h2>

    @if (!$cart)
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="bi bi-info-circle me-2"></i> Your cart is empty.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @else
    @php $total = 0; @endphp
    <div class="table-responsive">
        <table class="table table-borderless align-middle">
            <thead class="table-light">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $id => $item)
                @php
                $itemTotal = $item['price'] * $item['quantity'];
                $total += $itemTotal;
                @endphp
                <tr>
                    <td class="d-flex align-items-center gap-3">
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="rounded-3 shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">
                        <div>
                            <strong>{{ $item['name'] }}</strong><br>
                            <small class="text-muted">ID: {{ $id }}</small>
                        </div>
                    </td>
                    <td>${{ number_format($item['price'], 2) }}</td>
                    <td>
                        <form action="{{ route('cart.update', $id) }}" method="POST" class="d-flex align-items-center gap-2">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control form-control-sm w-50">
                            <button type="submit" class="btn btn-sm btn-outline-info">Update</button>
                        </form>
                    </td>
                    <td>${{ number_format($itemTotal, 2) }}</td>
                    <td>
                        <a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Remove this item from cart?')">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 🧾 Total Summary -->
    <div class="text-end mt-3">
        <h5 class="fw-bold text-success">Total: ${{ number_format($total, 2) }}</h5>
    </div>
    @endif

    <!-- Action Buttons -->
    <div class="mt-4 d-flex justify-content-between">
        <a href="{{ url('/') }}" class="btn btn-outline-secondary px-4 py-2">
            <i class="bi bi-arrow-left-circle me-1"></i> Continue Shopping
        </a>
        @if ($cart)
        <a href="{{ route('checkout') }}" class="btn btn-primary px-4 py-2">
            <i class="bi bi-bag-check me-1"></i> Checkout
        </a>
        @endif
    </div>
</div>
@endsection