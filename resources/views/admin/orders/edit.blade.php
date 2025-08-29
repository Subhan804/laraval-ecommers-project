@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Edit Order #{{ $order->id }}</h2>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
