<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalOrders = Order::count();

        $totalSales = Order::sum('total');

        $totalProducts = Product::count();

        $totalCategories = Category::count();

        $orders = Order::latest()->take(5)->get();

        return view('admin.dashboard', compact('orders', 'totalOrders', 'totalSales', 'totalProducts', 'totalCategories'));
    }
}
