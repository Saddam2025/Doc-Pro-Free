@props(['post'])

@php
    use Illuminate\Support\Str;
@endphp

<div class="grid sm:grid-cols-2 gap-y-5 gap-x-10">
    <!-- Blog Post Image -->
    <div class="md:h-[400px] w-full overflow-hidden rounded-xl bg-zinc-300">
        <img class="flex h-full w-full items-center justify-center md:object-cover object-contain object-top" 
             src="{{ asset($post->featurePhoto ?? 'images/default-thumbnail.jpg') }}" 
             alt="{{ $post->photo_alt_text ?? 'Blog post image' }}">
    </div>

    <!-- Blog Post Content -->
    <div class="flex flex-col justify-center space-y-10 py-4 sm:pl-10">
        <div>
            <!-- Post Title -->
            <div class="mb-5">
                <a href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}" 
                   class="mb-4 block text-xl md:text-4xl font-semibold hover:text-blue-600">
                    {{ $post->title }}
                </a>
                <!-- Categories -->
                <div>
                    @foreach ($post->categories as $category)
                        <a href="{{ route('filamentblog.category.post', ['category' => $category->slug]) }}">
                            <span class="bg-primary-200 text-primary-800 mr-2 inline-flex rounded-full px-2 py-1 text-xs font-semibold">
                                {{ $category->name }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- Post Subtitle with Text Limit -->
            <p class="mb-4">
                {!! Str::limit($post->sub_title, 150) !!}
            </p>
        </div>

        <!-- Author Info -->
        <div class="flex items-center gap-4">
            <img class="h-14 w-14 overflow-hidden rounded-full bg-zinc-300 object-cover md:object-fill text-[0]" 
                 src="{{ asset($post->user->avatar ?? 'images/default-avatar.jpg') }}" 
                 alt="{{ $post->user->name() }}">
            <div>
                <span title="{{ $post->user->name() }}" class="block max-w-[150px] overflow-hidden text-ellipsis whitespace-nowrap font-semibold">
                    {{ $post->user->name() }}
                </span>
                <span class="block whitespace-nowrap text-sm font-medium font-semibold text-zinc-600">
                    {{ $post->formattedPublishedDate() }}
                </span>
            </div>
        </div>
    </div>
</div>
