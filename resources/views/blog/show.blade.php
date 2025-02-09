@extends('layouts.app')

@section('title', $post->title . ' | Blog - Doc Pro')
@section('meta_description', Str::limit(strip_tags($post->content), 150))
@section('meta_keywords', implode(',', ['blog', $post->title, 'Doc Pro']))

@section('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "{{ $post->title }}",
    "description": "{{ Str::limit(strip_tags($post->content), 150) }}",
    "image": "{{ asset($post->featured_image ?? 'images/default-blog.png') }}",
    "datePublished": "{{ $post->created_at->format('Y-m-d') }}",
    "dateModified": "{{ $post->updated_at->format('Y-m-d') }}",
    "author": {
        "@type": "Person",
        "name": "{{ $post->author }}"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Doc Pro",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('images/logo.png') }}"
        }
    }
}
</script>
@endsection

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
    <p class="text-gray-500 mt-2">{{ $post->created_at->format('F d, Y') }}</p>
    <img src="{{ asset($post->featured_image ?? 'images/default-blog.png') }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-lg mt-4">
    <div class="prose max-w-3xl mx-auto mt-6">
        {!! $post->content !!}
    </div>

    <!-- Related Posts -->
    <div class="mt-10">
        <h3 class="text-2xl font-bold">Related Posts</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach($relatedPosts as $related)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset($related->featured_image ?? 'images/default-blog.png') }}" alt="{{ $related->title }}" class="w-full h-48 object-cover rounded-md">
                    <h4 class="text-lg font-bold mt-2">{{ $related->title }}</h4>
                    <a href="{{ route('blog.show', $related->slug) }}" class="text-blue-500">Read More →</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
