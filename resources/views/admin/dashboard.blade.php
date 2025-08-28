@extends('admin.layout')

@section('content')
    <div class="container-fluid px-4">
        <!-- Page Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h3 text-dark">Admin Dashboard</h2>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-sync-alt"></i> Refresh
                </button>
                <button class="btn btn-sm btn-primary">
                    <i class="fas fa-cog"></i> Settings
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-start border-primary shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-muted mb-1">Total Sales</h5>
                                <p class="fs-4 fw-bold mb-0">$18,450</p>
                                <small class="text-success"><i class="fas fa-arrow-up"></i> 12% vs last week</small>
                            </div>
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                                <i class="fas fa-dollar-sign text-primary fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-start border-success shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-muted mb-1">Orders</h5>
                                <p class="fs-4 fw-bold mb-0">247</p>
                                <small class="text-success"><i class="fas fa-arrow-up"></i> 8% vs last week</small>
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
                                <p class="fs-4 fw-bold mb-0">156</p>
                                <small class="text-warning"><i class="fas fa-arrow-right"></i> 0% change</small>
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
                                <h5 class="text-muted mb-1">Customers</h5>
                                <p class="fs-4 fw-bold mb-0">943</p>
                                <small class="text-success"><i class="fas fa-arrow-up"></i> 5% new signups</small>
                            </div>
                            <div class="bg-info bg-opacity-10 rounded-circle p-3">
                                <i class="fas fa-users text-info fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts & Recent Activity -->
        <div class="row g-4">
            <!-- Sales Chart Placeholder -->
            <div class="col-12 col-xl-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0"><i class="fas fa-chart-line text-primary"></i> Weekly Sales Overview</h5>
                    </div>
                    <div class="card-body">
                        <!-- Placeholder for Chart.js or other chart library -->
                        <div class="text-center py-5 text-muted">
                            <i class="fas fa-chart-area fa-3x mb-3"></i>
                            <p>Integrated chart (e.g., Chart.js) would display here.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="col-12 col-xl-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Orders</h5>
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
                                    <tr>
                                        <td>#1024</td>
                                        <td>John Doe</td>
                                        <td><span class="badge bg-success">Shipped</span></td>
                                        <td>$129.99</td>
                                    </tr>
                                    <tr>
                                        <td>#1023</td>
                                        <td>Alice Smith</td>
                                        <td><span class="badge bg-warning text-dark">Processing</span></td>
                                        <td>$89.50</td>
                                    </tr>
                                    <tr>
                                        <td>#1022</td>
                                        <td>Robert Kim</td>
                                        <td><span class="badge bg-secondary">Pending</span></td>
                                        <td>$210.00</td>
                                    </tr>
                                    <tr>
                                        <td>#1021</td>
                                        <td>Lisa Wong</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>$75.30</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->

        <!-- Footer Note -->
        <div class="text-center text-muted mt-4">
            <small>OpenCart-inspired Admin Panel • Laravel + Bootstrap 5</small>
        </div>
    </div>
@endsection

<!-- Include Font Awesome for icons -->
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection
