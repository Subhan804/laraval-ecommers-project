@extends('catalog.layout')

@section('content')
<div class="container">
    <h2>Checkout</h2>

    <form action="{{ route('order.place') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="customer_email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="customer_phone" class="form-control" required>
        </div>

        <h4>Your Cart</h4>
        <ul class="list-group mb-3">
            @foreach($cart as $id => $item)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $item['name'] }} (x{{ $item['quantity'] }})
                    <span>${{ $item['price'] * $item['quantity'] }}</span>
                </li>
            @endforeach
        </ul>

        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
</div>
@endsection
