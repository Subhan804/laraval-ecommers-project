@extends('catalog.layout')

@section('content')
<h2>Categories</h2>
<ul class="list-group">
    @foreach($categories as $cat)
        <li class="list-group-item">
            <a href="{{ route('catalog.category.show', $cat->id) }}">{{ $cat->name }}</a>
        </li>
    @endforeach
</ul>
@endsection
