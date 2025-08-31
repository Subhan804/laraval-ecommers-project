<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('catalog.categories.show', compact('category'));
    }
}
