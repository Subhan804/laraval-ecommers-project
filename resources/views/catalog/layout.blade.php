<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Store</title>
    <meta name="description" content="Browse our wide selection of quality products." />
    <!-- Google Fonts: Inter + Roboto Mono -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        /* Advanced Navbar Styling */
        .sticky-top {
            z-index: 1020;
            /* Ensure it stays above other elements */
        }

        .badge {
            font-size: 0.6rem;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            transition: background-color 0.3s, color 0.3s;
        }

        body.dark-mode {
            background-color: #121212;
            color: #e9ecef;
        }

        .dark-mode .bg-dark,
        .dark-mode .navbar-dark {
            background-color: #1a1a1a !important;
            border-color: #333;
        }

        .dark-mode .card {
            background-color: #1f1f1f;
            border-color: #333;
            color: #e9ecef;
        }

        .dark-mode .form-control {
            background-color: #2d2d2d;
            color: #e9ecef;
            border-color: #444;
        }

        .dark-mode .dropdown-menu {
            background-color: #2d2d2d;
            border-color: #444;
        }

        .dark-mode .dropdown-item:hover {
            background-color: #444;
        }

        .dark-mode .text-dark {
            color: #e9ecef;
        }

        .dark-mode .border-bottom {
            border-color: #333 !important;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }

        .btn-outline-light {
            color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .dark-mode .btn-outline-light {
            color: #dee2e6;
            border-color: #dee2e6;
        }

        .product-card {
            transition: transform 0.2s, box-shadow 0.2s;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            height: 180px;
            object-fit: cover;
        }

        .product-card .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-card .price {
            font-weight: 600;
            color: #d9534f;
        }

        .dark-mode .product-card .price {
            color: #f08080;
        }

        .cart-preview-item {
            font-size: 0.875rem;
        }

        .cart-preview-item .bi {
            font-size: 0.75rem;
        }

        .footer {
            background-color: #212529;
            color: #adb5bd;
        }

        .dark-mode .footer {
            background-color: #1a1a1a;
        }

        .lang-selector {
            font-size: 0.85rem;
        }

        .lang-selector a {
            color: #6c757d;
            text-decoration: none;
        }

        .dropdown-menu .dropdown-item {
            color: black;
            /* Default text color */
            background-color: white;
            /* Default background */
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #34393fff;
            color: white;
        }

        .dark-mode .lang-selector a {
            color: #adb5bd;
        }

        .lang-selector a:hover {
            color: #0d6efd;
        }

        .mega-bar a {
            transition: color 0.2s;
        }

        .mega-bar a:hover {
            color: #0d6efd;
        }

        .search-bar {
            max-width: 300px;
        }

        @media (max-width: 576px) {
            .search-bar {
                max-width: 180px;
            }

            .mega-bar .container {
                gap: 10px;
            }
        }
    </style>
</head>
@php
$cart = session('cart', []);
$cart_total = 0;
@endphp

<body>
    <!-- Mega Bar -->
    <div class="bg-light border-bottom py-2 text-dark small mega-bar">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <i class="bi bi-telephone"></i> <strong>123-456-7890</strong>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <div class="lang-selector">
                    <a href="#" class="active">EN</a> | <a href="#">ES</a>
                </div>
                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-heart"></i> Wish List (2)</a>
                <button id="themeToggle" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-moon-stars"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <!-- Left: Logo -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-shop fs-4 me-2"></i>
                <span>Your Store</span>
            </a>

            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Left Nav Links -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-bs-toggle="offcanvas" data-bs-target="#servicesDrawer" aria-controls="servicesDrawer">
                            <i class="bi bi-bag"></i> Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>

                <!-- Centered Search Bar -->
                <form class="d-flex mx-auto search-bar" role="search" style="max-width: 400px; width: 100%;">
                    <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

                <!-- Right: Cart & User -->
                <div class="d-flex align-items-center">

                    <!-- Cart Dropdown -->
                    <div class="nav-item dropdown me-3">
                        <a class="btn btn-sm btn-outline-light position-relative" href="#" id="cartDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{count($cart)}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3" style="width: 300px;"
                            aria-labelledby="cartDropdown">
                            @forelse($cart as $id => $item)
                            @php
                            $cart_total += $item['quantity'] * $item['price'];
                            @endphp
                            <li class="cart-preview-item mb-3 d-flex align-items-center">
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="Product" class="rounded me-3" height="50px" width="50px">
                                <div class="flex-grow-1">
                                    <div>{{ $item['name'] }}</div>
                                    <div class="text-muted">{{ $item['quantity'] }} × ${{ number_format($item['price'], 2) }}</div>
                                </div>
                                <a href="{{ route('cart.remove', $id) }}" class="text-danger"
                                    onclick="return confirm('Remove this item from cart?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </li>
                            @empty
                            <li class="cart-preview-item mb-3 d-flex align-items-center ">
                                No Item In Cart
                            </li>
                            @endforelse
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex justify-content-between fw-bold mb-3">
                                <span>Total:</span>
                                <span>${{$cart_total}}</span>
                            </li>
                            <li>
                                <div class="d-grid gap-2">
                                    <a href="{{ route('cart.index') }}" class="btn btn-sm btn-outline-dark">View Cart</a>
                                    <a href="{{ route('checkout') }}" class="btn btn-sm btn-outline-dark w-100 text-white bg-dark"><i class="bi bi-cart-plus me-1"></i> Checkout</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- User Dropdown -->
                    <div class="nav-item dropdown">
                        <a class="btn btn-sm btn-outline-light" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box"></i> Orders</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-heart"></i> Wishlist</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Session Alert --}}
    @if (session('success'))
    <div id="cart-alert" class="alert alert-success alert-dismissible fade show rounded-0 mb-0" role="alert">
        <a href="{{ route('cart.index') }}" class="alert-link">View Cart</a>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(() => {
            const alert = document.getElementById('cart-alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500); // remove from DOM after fade
            }
        }, 4000); // 4 seconds
    </script>
    @endif
    <!-- Main Content -->
    @yield('content')

    <!-- Services Side Drawer -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="servicesDrawer" aria-labelledby="servicesDrawerLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="servicesDrawerLabel">Our Services</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                @foreach($site_categories as $scategory)
                <li class="list-group-item">
                    <a href="{{ route('catalog.category.show',$scategory->id) }}" class="text-decoration-none text-dark">
                        {{ $scategory->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer py-4 mt-5">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 mb-3">
                    <h6 class="text-uppercase fw-bold">Your Store</h6>
                    <p class="small mb-0">
                        We offer a wide selection of quality products at the best prices.
                        Shop with confidence and enjoy fast delivery.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase fw-bold">Links</h6>
                    <ul class="list-unstyled small">
                        <li><a href="/" class="text-decoration-none text-light">Home</a></li>
                        <li><a href="/about" class="text-decoration-none text-light">About</a></li>
                        <li><a href="/contact" class="text-decoration-none text-light">Contact</a></li>
                        <li><a href="/shop" class="text-decoration-none text-light">Shop</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div class="col-md-3 mb-3">
                    <h6 class="text-uppercase fw-bold">Customer Service</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-decoration-none text-light">FAQ</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Returns</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Shipping Info</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Newsletter / Social -->
                <div class="col-md-3 mb-3">
                    <h6 class="text-uppercase fw-bold">Stay Connected</h6>
                    <form class="d-flex mb-3">
                        <input type="email" class="form-control form-control-sm me-2" placeholder="Email address">
                        <button class="btn btn-sm btn-primary" type="submit">Subscribe</button>
                    </form>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <hr class="border-secondary" />

            <div class="text-center small">
                © {{ date('Y') }} Your Store. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS & Custom Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        // Dark Mode Toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            const icon = themeToggle.querySelector('i');
            if (body.classList.contains('dark-mode')) {
                icon.classList.replace('bi-moon-stars', 'bi-brightness-high');
            } else {
                icon.classList.replace('bi-brightness-high', 'bi-moon-stars');
            }
        });

        // Optional: Remember user preference
        if (localStorage.getItem('darkMode') === 'enabled') {
            body.classList.add('dark-mode');
            themeToggle.querySelector('i').classList.replace('bi-moon-stars', 'bi-brightness-high');
        }

        themeToggle.addEventListener('click', () => {
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
            } else {
                localStorage.setItem('darkMode', 'disabled');
            }
        });
    </script>
</body>

</html>