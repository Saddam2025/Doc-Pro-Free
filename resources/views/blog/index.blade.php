@extends('layouts.app')

@php use Illuminate\Support\Str; @endphp <!-- ✅ Import Str -->

@section('title', 'Blogs')

@section('content')
<div class="container">
    <h1 class="text-4xl font-bold">Blog Posts</h1>

    @foreach ($posts as $post)
        <div class="my-6">
            <h2 class="text-2xl font-semibold">
                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
            </h2>
            <p class="text-gray-600">Published on {{ $post->created_at->format('F d, Y') }}</p>
            
            <!-- ✅ Use Str properly -->
            <p>{{ Str::limit($post->content, 150) }}</p>
        </div>
    @endforeach

    {{ $posts->links() }} <!-- ✅ Pagination -->
</div>
@endsection
