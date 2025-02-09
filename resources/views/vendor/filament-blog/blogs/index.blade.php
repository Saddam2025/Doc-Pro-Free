<x-blog-layout>
    @if(count($posts))
        <!-- Hero Section -->
        <section class="bg-white py-12 shadow-sm">
            <div class="container mx-auto px-6 sm:px-10">
                <!-- Display the first (hero) post -->
                @foreach ($posts->take(1) as $post)
                    <x-blog-feature-card :post="$post" />
                @endforeach
            </div>
        </section>

        <!-- Remaining Posts Section -->
        <section class="pb-16 pt-8 bg-slate-50">
            <div class="container mx-auto px-6 sm:px-10">
                <div class="grid gap-y-14 gap-x-10 sm:grid-cols-3">
                    <!-- Skip the hero post and display the rest -->
                    @foreach ($posts->skip(1) as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                </div>

                <!-- "Show all blogs" Button -->
                <div class="flex justify-center pt-14">
                    <a 
                        href="{{ route('filamentblog.post.all') }}" 
                        class="group inline-flex items-center gap-x-3 rounded-full bg-slate-100 px-10 py-3
                               text-sm font-semibold text-gray-700 shadow-sm transition-all hover:bg-slate-200
                               hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-slate-300
                               focus:ring-offset-2"
                    >
                        <span>Show all blogs</span>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-5 w-5 transition-transform group-hover:translate-x-1" 
                             viewBox="0 0 24 24"
                        >
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
        </section>
    @else
        <!-- No Posts Found -->
        <div class="container mx-auto px-6 sm:px-10 py-12">
            <div class="flex justify-center">
                <p class="text-2xl font-semibold text-gray-300">No posts found</p>
            </div>
        </div>
    @endif
</x-blog-layout>
