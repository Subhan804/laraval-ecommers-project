@extends('admin.layout')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Products</h2>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if ($product->image)
                                            <div class="ratio ratio-1x1" style="width: 60px;">
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ $product->name }}" class="img-fluid rounded object-fit-cover">
                                            </div>
                                        @else
                                            <span class="text-muted fst-italic">No Image</span>
                                        @endif
                                    </td>
                                    <td class="text-wrap">{{ $product->description }}</td>
                                    <td class="text-truncate" style="max-width: 150px;">{{ $product->name }}</td>
                                    <td>{{ $product->category->name ?? 'No Category' }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-sm btn-outline-primary m-1">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger m-1"
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
