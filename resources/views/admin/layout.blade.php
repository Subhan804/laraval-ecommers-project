<!DOCTYPE html>
<html>

<head>
    <title>Admin - Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Store Admin</a>
            <div class="d-flex align-items-center gap-2">
                <a href="/" target="_blank" class="btn btn-sm btn-outline-light">Home</a>
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