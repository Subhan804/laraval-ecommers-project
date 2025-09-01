<!DOCTYPE html>
<html>

<head>
    <title>Admin - Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 220px;
            background-color: #343a40;
            position: fixed;
            top: 56px;
            /* below top navbar */
            left: 0;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            color: #adb5bd;
            display: block;
            padding: 10px 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        .content {
            margin-left: 220px;
            margin-top: 70px;
            /* below top navbar */
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-shop"></i> Store Admin
            </a>

            <div class="" id="adminNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-1">


                    <!-- Quick Links Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-2" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-grid"></i> Quick Access
                        </a>    
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('products.index') }}">
                                    <i class="bi bi-box me-2"></i> Products
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('categories.index') }}"><i
                                        class="bi bi-tags"></i> Categories</a></li>
                            <li><a class="dropdown-item" href="{{ route('orders.index') }}"><i class="bi bi-cart"></i>
                                    Orders</a></li>
                        </ul>
                    </li>

                    <!-- Notifications -->
                    <li class="nav-item dropdown">
                        <a class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-bell"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">New order received</a></li>
                            <li><a class="dropdown-item" href="#">Product stock low</a></li>
                            <li><a class="dropdown-item" href="#">New customer registered</a></li>
                        </ul>
                    </li>

                    <!-- User Menu -->
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Admin" class="rounded-circle me-1" width="28"
                                height="28" alt="User">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-person me-2"></i> Profile
                                </a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-gear me-2"></i> Settings
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST">
                                    @csrf
                                    <button class="dropdown-item text-danger"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex align-items-center" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-none d-md-block btn btn-sm btn-outline-light">
                                <i class="bi bi-house me-1"></i> Home
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="/" class="dropdown-item"><i class="bi bi-person"></i> Your store</a></li>
                            <li><a class="dropdown-item"><i class="bi bi-gear"></i> Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST">
                                    @csrf
                                    <button class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <div class="sidebar">
        <h5 class="text-center text-white">Menu</h5>
        <hr class="bg-secondary">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('orders.index') }}">Orders</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
