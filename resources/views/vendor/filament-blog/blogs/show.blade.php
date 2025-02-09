<x-blog-layout>
    <section class="pb-16">
        <div class="container mx-auto px-6 sm:px-10">
            
            <!-- Breadcrumbs -->
            <nav class="mb-10 flex items-center gap-x-2 text-sm font-semibold">
                <a href="{{ route('filamentblog.post.index') }}" class="opacity-60 hover:text-primary-600 transition">
                    Home
                </a>
                <span class="opacity-30">/</span>
                <a href="{{ route('filamentblog.post.all') }}" class="opacity-60 hover:text-primary-600 transition">
                    Blog
                </a>
                <span class="opacity-30">/</span>
                <a 
                    title="{{ $post->slug }}" 
                    href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}" 
                    class="max-w-2xl truncate font-medium transition-colors duration-300 hover:text-primary-600"
                >
                    {{ $post->title }}
                </a>
            </nav>

            <!-- Main Content -->
            <div class="mx-auto mb-20 space-y-10">
                <div class="grid gap-x-10 sm:grid-cols-[minmax(min-content,10%)_1fr_minmax(min-content,10%)]">
                    
                    <!-- Left Sticky Icons / Share -->
                    <aside class="py-5">
                        <div class="sticky top-24 flex flex-col items-center gap-y-5 divide-y-2 divide-slate-200">
                            <!-- Scroll-to-Comments Button -->
                            <button 
                                x-data 
                                x-on:click="
                                    document
                                        .getElementById('comments')
                                        .scrollIntoView({ behavior: 'smooth' })
                                "
                                class="group flex flex-col items-center justify-center gap-y-2"
                            >
                                <div 
                                    class="flex items-center justify-center rounded-full 
                                           bg-slate-100 px-4 py-4 
                                           transition-colors duration-200 
                                           group-hover:bg-slate-200"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path 
                                            fill="currentColor" 
                                            d="M13 11H7a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2m4-4H7a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2m2-5H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h11.59l3.7 3.71A1 1 0 0 0 21 22a.84.84 0 0 0 .38-.08A1 1 0 0 0 22 21V5a3 3 0 0 0-3-3m1 16.59l-2.29-2.3A1 1 0 0 0 17 16H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z"
                                        />
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold">COMMENTS</span>
                            </button>

                            <!-- Share Buttons -->
                            <div class="pt-5">
                                {!! $shareButton?->html_code !!}
                            </div>
                        </div>
                    </aside>

                    <!-- Post Content -->
                    <main class="space-y-10">
                        <div>
                            <div class="mb-6 h-full w-full overflow-hidden rounded bg-slate-200">
                                <img 
                                    class="h-full min-h-[400px] w-full object-cover object-top" 
                                    src="{{ $post->featurePhoto }}" 
                                    alt="{{ $post->photo_alt_text }}"
                                >
                            </div>
                            <div class="mb-6">
                                <h1 class="mb-6 text-4xl font-semibold text-gray-800">
                                    {{ $post->title }}
                                </h1>
                                <p class="text-gray-600">
                                    {{ $post->sub_title }}
                                </p>
                                <div class="mt-2">
                                    @foreach ($post->categories as $category)
                                        <a href="{{ route('filamentblog.category.post', ['category' => $category->slug]) }}">
                                            <span 
                                                class="mr-2 inline-flex rounded-full bg-primary-200 
                                                       px-2 py-1 text-xs font-semibold text-primary-800"
                                            >
                                                {{ $category->name }}
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            
                            <!-- Author & Date -->
                            <div class="mb-5 flex items-center justify-between gap-x-3 border-y py-5">
                                <div class="flex items-center gap-4">
                                    <img 
                                        class="h-14 w-14 overflow-hidden rounded-full border-4 border-white
                                               bg-zinc-300 object-cover ring-1 ring-slate-300" 
                                        src="{{ $post->user->avatar }}" 
                                        alt="{{ $post->user->name() }}"
                                    >
                                    <div class="leading-tight">
                                        <span 
                                            title="{{ $post->user->name() }}" 
                                            class="block max-w-[150px] overflow-hidden text-ellipsis whitespace-nowrap font-semibold text-gray-800"
                                        >
                                            {{ $post->user->name() }}
                                        </span>
                                        <span class="block whitespace-nowrap text-sm font-medium text-zinc-600">
                                            {{ $post->formattedPublishedDate() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Post Body -->
                            <article class="leading-7 text-gray-700">
                                {!! tiptap_converter()->asHTML($post->body, toc: true, maxDepth: 3) !!}
                            </article>

                            <!-- Tags -->
                            @if($post->tags->count())
                                <div class="pt-10">
                                    <span class="mb-3 block font-semibold text-gray-800">Tags</span>
                                    <div class="space-x-2 space-y-1">
                                        @foreach ($post->tags as $tag)
                                            <a 
                                                href="{{ route('filamentblog.tag.post', ['tag' => $tag->slug]) }}" 
                                                class="inline-block rounded-full border border-slate-300 
                                                       px-3 py-1 text-sm font-medium text-slate-600 
                                                       transition-colors hover:bg-slate-100"
                                            >
                                                {{ $tag->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Comments Section -->
                        @if($post->comments->count())
                            <div id="comments" class="border-t-2 border-slate-200 py-10">
                                <div class="mb-4">
                                    <h3 class="mb-2 text-2xl font-semibold text-gray-800">Comments</h3>
                                </div>
                                <div class="flex flex-col gap-y-6 divide-y">
                                    @foreach($post->comments as $comment)
                                        <article class="pt-4 text-base text-gray-700">
                                            <div class="mb-4 flex items-center gap-4">
                                                <img 
                                                    class="h-14 w-14 overflow-hidden rounded-full border-4 border-white 
                                                           bg-zinc-300 object-cover ring-1 ring-slate-300"
                                                    src="{{ asset($comment->user->avatar) }}" 
                                                    alt="{{ $comment->user->name() }}"
                                                >
                                                <div>
                                                    <span 
                                                        class="block max-w-[150px] overflow-hidden text-ellipsis 
                                                               whitespace-nowrap font-semibold text-gray-800"
                                                    >
                                                        {{ $comment->user->{config('filamentblog.user.columns.name')} }}
                                                    </span>
                                                    <span class="block whitespace-nowrap text-sm font-medium text-zinc-600">
                                                        {{ $comment->created_at->diffForHumans() }}
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="text-gray-500">
                                                {{ $comment->comment }}
                                            </p>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Comment Form -->
                        <x-blog-comment :post="$post" />
                    </main>

                    <!-- Right Column (Ads placeholder) -->
                    <aside>
                        {{-- 
                        <div
                            class="sticky top-24 flex h-[600px] w-[160px] items-center justify-center 
                                   overflow-hidden rounded bg-slate-200 font-medium text-slate-500/20"
                        >
                            <span>ADS</span>
                        </div> 
                        --}}
                    </aside>
                </div>
            </div>

            <!-- Related Posts -->
            <div>
                <div>
                    <div class="relative mb-6 flex items-center gap-x-8">
                        <h2 class="whitespace-nowrap text-xl font-semibold text-gray-800">
                            <span class="font-bold text-primary">#</span> Related Posts
                        </h2>
                        <div class="flex w-full items-center">
                            <span class="h-0.5 w-full rounded-full bg-slate-200"></span>
                        </div>
                    </div>
                    <div class="grid gap-x-12 gap-y-10 sm:grid-cols-1 md:grid-cols-3">
                        @forelse($post->relatedPosts() as $post)
                            <x-blog-card :post="$post" />
                        @empty
                            <div class="col-span-3">
                                <p class="text-center text-xl font-semibold text-gray-300">
                                    No related posts found.
                                </p>
                            </div>
                        @endforelse
                    </div>

                    <!-- "Show All Blogs" Button -->
                    <div class="flex justify-center pt-20">
                        <a 
                            href="{{ route('filamentblog.post.all') }}" 
                            class="inline-flex items-center justify-center gap-x-3 
                                   rounded-full bg-slate-100 px-10 py-3 text-sm font-semibold text-gray-700
                                   transition-all duration-300 hover:bg-slate-200 hover:text-gray-800"
                        >
                            <span>Show all blogs</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path 
                                    fill="none" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="1.5" 
                                    d="M6 18L18 6m0 0H9m9 0v9"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Share Button Script -->
    {!! $shareButton?->script_code !!}
</x-blog-layout>
