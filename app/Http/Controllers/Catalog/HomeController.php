<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(8)->where('status', 1)->get();
        return view('catalog.home', compact('products'));
    }

    public function search(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $searchTerm = $request->search;
        $selectedCategory = $request->category;

        $products = Product::where('status', 1)
            ->when($searchTerm, function ($query, $searchTerm) {
                $query->where('name', 'like', "%{$searchTerm}%");
            })
            ->when($selectedCategory, function ($query, $selectedCategory) {
                $query->where('category_id', $selectedCategory);
            })
            ->get();

        return view('catalog.search', compact('products', 'categories', 'searchTerm', 'selectedCategory'));
    }
}
