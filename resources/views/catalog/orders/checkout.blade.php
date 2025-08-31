@extends('catalog.layout')

@section('content')
<style>
    .btn-gradient {
        background: linear-gradient(135deg, #6f42c1, #007bff);
        color: #fff;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(135deg, #5a32a3, #0056b3);
        transform: scale(1.03);
    }

    .text-gradient {
        background: linear-gradient(to right, #007bff, #6f42c1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <h2 class="mb-3 text-center text-gradient fw-bold">
                        <i class="bi bi-bag-check-fill me-2"></i> Secure Checkout
                    </h2>

                    <form action="{{ route('order.place') }}" method="POST">
                        @csrf

                        <!-- Customer Info -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="customer_name" class="form-control rounded-3" id="name" placeholder="Name" required>
                                    <label for="name">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="customer_email" class="form-control rounded-3" id="email" placeholder="Email" required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" name="customer_phone" class="form-control rounded-3" id="phone" placeholder="Phone" required>
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="address" class="form-control rounded-3" id="address" placeholder="Address" required>
                                    <label for="address">Shipping Address</label>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Summary -->
                        @php
                        $total = 0;
                        @endphp

                        <h4 class="mt-4 mb-3 text-secondary border-bottom pb-2">🛒 Your Cart</h4>
                        <ul class="list-group mb-4">
                            @forelse($cart as $id => $item)
                            @php
                            $itemTotal = $item['price'] * $item['quantity'];
                            $total += $itemTotal;
                            @endphp
                            <li class="list-group-item d-flex align-items-center gap-3 py-3">
                                <!-- Product Image -->
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="rounded-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;">

                                <!-- Product Info -->
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-semibold">{{ $item['name'] }}</h6>
                                    <small class="text-muted">Price: ${{ number_format($item['price'], 2) }}</small><br>
                                    <small class="text-muted">Quantity: x{{ $item['quantity'] }}</small>
                                </div>

                                <!-- Item Total -->
                                <div class="text-end">
                                    <span class="badge bg-gradient text-white px-3 py-2 rounded-pill">
                                        ${{ number_format($itemTotal, 2) }}
                                    </span>
                                </div>
                            </li>
                            @empty
                            <li class="list-group-item text-center text-muted py-4">
                                <i class="bi bi-cart-x fs-4 me-2"></i> Your cart is empty. Go treat yourself!
                            </li>
                            @endforelse
                        </ul>

                        <!-- 🧾 Total Price -->
                        @if($total > 0)
                        <div class="text-end mb-4">
                            <h5 class="fw-bold text-primary">Total: ${{ number_format($total, 2) }}</h5>
                        </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                                <i class="bi bi-arrow-left-circle me-1"></i> Continue Shopping
                            </a>
                            <button type="submit" class="btn btn-gradient px-4 py-2 rounded-pill">
                                <i class="bi bi-check-circle me-1"></i> Place Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection