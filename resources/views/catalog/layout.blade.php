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
        <style>.sticky-top {
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
                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-person"></i> My Account</a>
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
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <i class="bi bi-shop fs-4 me-2"></i>
                <span>Your Store</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.html"><i class="bi bi-grid"></i> Categories</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-bag"></i> Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                            <li><a class="dropdown-item" href="#">New Arrivals</a></li>
                            <li><a class="dropdown-item" href="#">Best Sellers</a></li>
                            <li><a class="dropdown-item" href="#">On Sale</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>

                <!-- Search Bar -->
                <form class="d-flex me-3 search-bar" role="search">
                    <input class="form-control form-control-sm" type="search" placeholder="Search products..."
                        aria-label="Search">
                    <button class="btn btn-sm btn-outline-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

                <!-- Cart Dropdown -->
                <div class="nav-item dropdown me-3">
                    <a class="btn btn-sm btn-outline-light position-relative" href="#" id="cartDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-cart"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-3" style="width: 300px;"
                        aria-labelledby="cartDropdown">
                        <li class="cart-preview-item mb-3 d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Product" class="rounded me-3">
                            <div class="flex-grow-1">
                                <div>Wireless Earbuds</div>
                                <div class="text-muted">1 × $49.99</div>
                            </div>
                            <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                        </li>
                        <li class="cart-preview-item mb-3 d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Product" class="rounded me-3">
                            <div class="flex-grow-1">
                                <div>Smart Watch</div>
                                <div class="text-muted">2 × $89.99</div>
                            </div>
                            <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="d-flex justify-content-between fw-bold mb-3">
                            <span>Total:</span>
                            <span>$229.97</span>
                        </li>
                        <li>
                            <div class="d-grid gap-2">
                                <a href="cart.html" class="btn btn-sm btn-outline-dark">View Cart</a>
                                <a href="checkout.html" class="btn btn-sm btn-dark">Checkout</a>
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
                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        <!-- Main Content -->
        <div class="container mt-4">
            @yield('content')
        </div>

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
