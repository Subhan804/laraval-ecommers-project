<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index');
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('orders.index')->with('success', 'Order created!');
    }

    public function show($id)
    {
        return "Show order: " . $id;
    }

    public function edit($id)
    {
        return view('admin.orders.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('orders.index')->with('success', 'Order updated!');
    }

    public function destroy($id)
    {
        return redirect()->route('orders.index')->with('success', 'Order deleted!');
    }
}
