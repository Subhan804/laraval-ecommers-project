@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Products</h2>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-sm align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 5%;">ID</th>
                                <th scope="col" style="width: 10%;">Image</th>
                                <th scope="col" style="width: 20%;">Description</th>
                                <th scope="col" style="width: 25%;">Name</th>
                                <th scope="col" style="width: 20%;">Category</th>
                                <th scope="col" style="width: 15%;">Price</th>
                                <th scope="col" style="width: 25%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                                class="img-fluid rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <span class="text-muted fst-italic">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $product->description }}</td>
                                    <td class="text-truncate">{{ $product->name }}</td>
                                    <td>{{ $product->category->name ?? 'No Category' }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <div class="d-flex gap-2 flex-wrap">
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>

                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection