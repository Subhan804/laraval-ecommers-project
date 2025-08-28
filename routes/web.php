<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Catalog\HomeController;
use App\Http\Controllers\Catalog\CategoryController;
use App\Http\Controllers\Catalog\ProductController;
use App\Http\Controllers\CatalogController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('categories', AdminCategoryController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('orders', AdminOrderController::class);
});
Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::prefix('catalog')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('catalog.home');
    Route::get('/categories', [CategoryController::class, 'index'])->name('catalog.categories');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('catalog.category.show');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('catalog.product.show');
});



