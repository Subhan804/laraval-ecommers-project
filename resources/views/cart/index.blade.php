@extends('catalog.layout')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">🛒 Your Cart</h2>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (!$cart)
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                Your cart is empty.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $id => $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>${{ number_format($item['price'], 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.update', $id) }}" method="POST"
                                        class="d-flex align-items-center gap-2">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1"
                                            class="form-control form-control-sm w-50">
                                        <button type="submit" class="btn btn-sm btn-outline-info">Update</button>
                                    </form>
                                </td>
                                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                <td>
                                    <a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Remove this item from cart?')">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="mt-4">
            <a href="{{ url('/') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="bi bi-arrow-left-circle me-1"></i> Continue Shopping
            </a>
        </div>
    </div>
@endsection
