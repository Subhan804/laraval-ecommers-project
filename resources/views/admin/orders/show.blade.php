@extends('admin.layout')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <i class="bi bi-receipt-cutoff me-2 fs-4"></i>
            <h2 class="mb-0">Order #{{ $order->id }}</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <h5 class="fw-bold"><i class="bi bi-person-circle me-2"></i>Customer Details</h5>
                <p><i class="bi bi-person-fill me-1"></i><strong>Name:</strong> {{ $order->customer_name }}</p>
                <p><i class="bi bi-envelope-fill me-1"></i><strong>Email:</strong> <a href="mailto:{{ $order->customer_email }}">{{ $order->customer_email }}</a></p>
                <p><i class="bi bi-info-circle-fill me-1"></i><strong>Status:</strong> <span class="badge bg-info text-dark">{{ ucfirst($order->status) }}</span></p>
                <p><i class="bi bi-geo-alt-fill me-1"></i><strong>Address:</strong> {{ $order->address }}</p>
            </div>

            <div class="mb-3">
                <h5 class="fw-bold"><i class="bi bi-box-seam me-2"></i>Items</h5>
                <ul class="list-group">
                    @foreach($order->items as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="bi bi-caret-right-fill text-secondary me-1"></i>
                                {{ $item->product->name }} <span class="text-muted">(x{{ $item->quantity }})</span>
                            </div>
                            <span class="fw-semibold">${{ number_format($item->price * $item->quantity, 2) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="text-end mt-4">
                <h4 class="fw-bold"><i class="bi bi-cash-coin me-2"></i>Total: ${{ number_format($order->total, 2) }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection