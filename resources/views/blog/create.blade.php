@extends('layouts.app')

@section('title', 'Create New Blog Post')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Create New Blog Post</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="featured_image" class="form-label">Featured Image</label>
            <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', 'Admin') }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1">
            <label class="form-check-label" for="is_published">Publish Now</label>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
