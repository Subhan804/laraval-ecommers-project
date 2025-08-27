@extends('admin.layout')

@section('content')
    <h2>Categories</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add New Category</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure, you want to delete this category?')">
                            Delete
                        </button>
                    </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
