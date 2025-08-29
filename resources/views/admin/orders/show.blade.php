@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Order #{{ $order->id }}</h2>

    <p><strong>Customer:</strong> {{ $order->customer_name }}</p>
    <p><strong>Email:</strong> {{ $order->customer_email }}</p>
    <p><strong>Phone:</strong> {{ $order->customer_phone }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>

    <h4>Items</h4>
    <ul>
        @foreach($order->items as $item)
            <li>{{ $item->product->name }} (x{{ $item->quantity }}) - ${{ $item->price * $item->quantity }}</li>
        @endforeach
    </ul>

    <h4>Total: ${{ $order->total }}</h4>
</div>
@endsection
