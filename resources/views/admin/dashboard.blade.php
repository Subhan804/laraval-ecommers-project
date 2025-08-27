@extends('admin.layout')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Welcome to Admin Dashboard</h3>
        </div>
        <div class="card-body">
            <p class="lead">Use the left menu to manage your store.</p>
            <ul>
                <li>Manage Categories</li>
                <li>Manage Products</li>
                <li>View Orders</li>
            </ul>
        </div>
    </div>
@endsection
