<x-blog-layout>
    <!-- Section: Title (Hero) -->
    <section 
        class="bg-gradient-to-r from-white to-gray-50 py-12 shadow-sm 
               sm:py-16 md:py-20"
    >
        <header class="container mx-auto px-6 sm:px-10">
            <h3
                class="relative z-10 text-3xl font-semibold tracking-tight text-gray-800 
                       leading-tight sm:text-4xl md:text-5xl"
            >
                Latest News / Blogs
            </h3>
        </header>
    </section>

    <!-- Section: Posts -->
    <section class="bg-slate-50 pb-16 pt-8">
        <div class="container mx-auto px-6 sm:px-10">
            <div class="grid gap-x-10 gap-y-10 sm:grid-cols-3">
                @forelse ($posts as $post)
                    <!-- You can add hover/transition classes to blog cards for subtle effects -->
                    <div class="transition-transform duration-200 hover:scale-[1.01] hover:shadow-lg">
                        <x-blog-card :post="$post" />
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-3 mx-auto w-full max-w-md">
                        <div class="rounded-md bg-white p-10 text-center shadow-md">
                            <p class="text-2xl font-semibold text-gray-300">
                                No posts found
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-14 flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</x-blog-layout>
