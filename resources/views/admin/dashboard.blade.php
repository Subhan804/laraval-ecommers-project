@extends('admin.layout')

@section('content')
<div class="container-fluid px-4">
    <!-- Page Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 text-dark">Admin Dashboard</h2>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-start border-primary shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-muted mb-1">Total Sales</h5>
                            <p class="fs-4 fw-bold mb-0">${{$totalSales}}</p>
                            <small class="text-primary"><i class="fas fa-arrow-up"></i> 12% vs last week</small>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-dollar-sign text-primary fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card border-start border-success shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-muted mb-1">
                                <a href="{{ route('orders.index') }}" class="text-decoration-none text-dark fw-semibold hover-link">
                                    Orders
                                </a>
                            </h5>
                            <p class="fs-4 fw-bold mb-0">{{ $totalOrders }}</p>
                            <a href="{{ route('orders.index') }}" style="text-decoration: none;"><small class="text-success">View All</small></a>
                        </div>
                        <div class="bg-success bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-shopping-cart text-success fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-start border-warning shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-muted mb-1">Products</h5>
                            <p class="fs-4 fw-bold mb-0">{{$totalProducts}}</p>
                            <a href="{{ route('products.index') }}" style="text-decoration: none;"><small class="text-warning">View All</small></a>
                        </div>
                        <div class="bg-warning bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-box-open text-warning fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-start border-info shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-muted mb-1">Category</h5>
                            <p class="fs-4 fw-bold mb-0">{{$totalCategories}}</p>
                            <a href="{{ route('categories.index') }}" style="text-decoration: none;"><small class="text-info">View All</small></a>
                        </div>
                        <div class="bg-info bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-users text-info fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="row g-4">
        <div class="col-12 col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><b>Recent Orders</b></h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>{{ $order->customer_name ?? 'Guest' }}</td>
                                    <td>
                                        @if($order->status == 'Pending')
                                        <span class="badge bg-secondary">Pending</span>
                                        @elseif($order->status == 'Processing')
                                        <span class="badge bg-warning text-dark">Processing</span>
                                        @elseif($order->status == 'Completed')
                                        <span class="badge bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td>${{ $order->total }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">No Products found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection