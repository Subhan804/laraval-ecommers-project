@extends('admin.layout')

@section('content')
<h2 class="text-center">Edit Category</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card shadow-sm container mt-4">
    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name"
                    class="form-control" value="{{ old('name', $category->name) }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Category Image</label>
                <input type="file" name="image" id="image" class="form-control">

                {{-- Image preview --}}
                <div class="mt-2">
                    <img id="preview-image"
                        src="{{ !empty($category->image) ? asset('storage/' . $category->image) : '' }}"
                        alt="Category Image"
                        width="120"
                        style="display: {{ !empty($category->image) ? 'block' : 'none' }};">
                </div>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status', $category->status) == 1 ? 'selected' : '' }}>Enable</option>
                    <option value="0" {{ old('status', $category->status) == 0 ? 'selected' : '' }}>Disable</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $category->description ?? '') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
{{-- JS for live image preview --}}
<script>
    document.getElementById('image').addEventListener('change', function(event) {
        let reader = new FileReader();
        reader.onload = function(e) {
            let preview = document.getElementById('preview-image');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection