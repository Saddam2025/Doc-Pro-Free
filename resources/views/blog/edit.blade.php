@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Blog Post</h1>
    <form action="{{ route('blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="featured_image" class="form-label">Featured Image</label>
            <input type="file" class="form-control" id="featured_image" name="featured_image">
            @if ($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}" class="img-fluid mt-2" alt="{{ $post->title }}">
            @endif
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" {{ $post->is_published ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Publish Now</label>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
