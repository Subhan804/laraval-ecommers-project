@extends('catalog.layout')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
           <img src="{{ asset('storage/images/about-us.png') }}" alt="About Us" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h1 class="mb-3">About Us</h1>
            <p class="lead text-muted">
                Welcome to our store! We’re passionate about delivering quality products that make your life better.
            </p>
            <p>
                Our journey began with a simple idea: to create a place where people could find unique, affordable, and reliable items. Whether you're shopping for essentials or something special, we’re here to help.
            </p>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Trusted by thousands of customers</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Fast and secure delivery</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i> 24/7 customer support</li>
            </ul>
        </div>
    </div>
</div>
@endsection