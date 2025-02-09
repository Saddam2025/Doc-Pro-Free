<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token & Favicons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ $setting?->faviconImage }}" type="image/x-icon" />

    <!-- SEO Meta (via Firefly) -->
    {!! \Firefly\FilamentBlog\Facades\SEOMeta::generate() !!}

    <!-- Tracking/Analytics Scripts -->
    {!! $setting?->google_console_code !!}
    {!! $setting?->google_analytic_code !!}
    {!! $setting?->google_adsense_code !!}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
        rel="stylesheet">

    <!-- Tailwind & Alpine -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                container: {
                    padding: '1rem',
                    center: true,
                    screens: {
                        '2xl': '1200px'
                    }
                },
                extend: {
                    colors: {
                        'primary': {
                            DEFAULT: '#FDAE4B',
                            50: '#FFF9F5',
                            100: '#FFF7EC',
                            200: '#FEE4C4',
                            300: '#FED29C',
                            400: '#FDC073',
                            500: '#FDAE4B',
                            600: '#FC9514',
                            700: '#D57802',
                            800: '#9E5902',
                            900: '#663901',
                            950: '#4B2A01'
                        },
                        'rum': {
                            DEFAULT: '#6C6489',
                            50: '#FFFFFF',
                            100: '#FFFFFF',
                            200: '#F0EFF3',
                            300: '#D9D7E2',
                            400: '#C3C0D1',
                            500: '#ADA8BF',
                            600: '#9790AE',
                            700: '#81799D',
                            800: '#6C6489',
                            900: '#524C69',
                            950: '#464058'
                        },
                    }
                }
            }
        }
    </script>

    <!-- Base Styles -->
    <style>
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        /* Blog Content Styles */
        article h1 {
            line-height: 1.2;
            font-size: 2rem;
            color: #424242;
            font-weight: 900;
            padding-bottom: 20px;
        }

        article h2 {
            line-height: 1.2;
            font-size: 1.5rem;
            color: #424242;
            font-weight: 800;
            padding-bottom: 10px;
        }

        article h3 {
            line-height: 1.2;
            font-size: 1.25rem;
            color: #424242;
            font-weight: 700;
            padding-bottom: 10px;
        }

        article h4 {
            line-height: 1.2;
            font-size: 1.2rem;
            color: #424242;
            font-weight: 600;
            padding-bottom: 10px;
        }

        article p {
            line-height: 1.75;
            letter-spacing: 0.2px;
            font-size: 1rem;
            color: #424242;
            font-weight: 400;
            margin-bottom: 1rem;
        }

        article ul {
            line-height: 1.7;
            padding-bottom: 5px;
            list-style-type: disc;
            margin-left: 1.5rem;
        }

        article table {
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            width: 100%;
            border-collapse: collapse;
        }

        article table, article table td, article table th {
            border: 1px solid #ccc;
            padding: 5px 10px;
        }

        /* Share buttons */
        .sharethis-inline-share-buttons {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .sharethis-inline-share-buttons .st-btn {
            width: 50px !important;
            height: 50px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            margin-bottom: 10px !important;
            margin-right: 0 !important;
            border-radius: 50px !important;
        }

        .sharethis-inline-share-buttons .st-btn img {
            top: 0 !important;
        }
    </style>

</head>

<body class="antialiased bg-slate-50 text-gray-700">
    <div class="min-h-screen flex flex-col">
        
        <!-- Page Header (using your custom component) -->
        <header class="bg-white shadow-sm sticky top-0 z-30">
            <div class="container">
                <x-blog-header
                    class="py-3"
                    title="{{ $setting?->title }}"
                    logo="{{ $setting?->logoImage }}"
                />
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-grow container py-8">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200">
            <div class="container px-5 py-12">
                <div class="grid gap-x-10 gap-y-10 sm:grid-cols-3">
                    <!-- Footer Left (Title & Description) -->
                    <div class="flex flex-col items-start gap-3">
                        <h4 class="text-xl font-semibold text-primary-700">
                            {{ $setting?->title }}
                        </h4>
                        <p class="text-base text-gray-600 leading-relaxed">
                            {{ $setting?->description }}
                        </p>
                    </div>

                    <!-- Footer Right (Quick Links & Newsletter) -->
                    <div class="sm:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Quick Links -->
                        <div>
                            <h4 class="text-xl font-semibold mb-3 text-gray-800">Quick Links</h4>
                            <div class="flex flex-col space-y-2 text-sm font-medium">
                                @forelse($setting->quick_links ?? [] as $link)
                                    <a 
                                        href="{{ $link['url'] }}" 
                                        class="text-gray-600 transition-transform duration-300 hover:text-primary-600 hover:translate-x-1"
                                    >
                                        {{ $link['label'] }}
                                    </a>
                                @empty
                                    <p class="font-semibold text-gray-400">No links found</p>
                                @endforelse
                            </div>
                        </div>

                        <!-- Newsletter Subscription -->
                        <div>
                            <div class="relative overflow-hidden rounded-2xl bg-slate-100 px-6 py-4 text-black shadow-md">
                                <h4 class="mb-3 text-xl font-semibold text-gray-800">
                                    Subscribe to our Newsletter
                                </h4>
                                <p class="mb-3 text-sm text-gray-600">
                                    Get updates and exclusive content delivered to your inbox.
                                </p>
                                
                                <form method="post" action="{{ route('filamentblog.post.subscribe') }}">
                                    @csrf
                                    <label for="email-address" class="sr-only">Email</label>
                                    @error('email')
                                        <span class="text-xs text-red-500 block mb-1">{{ $message }}</span>
                                    @enderror
                                    <div class="relative">
                                        <input
                                            autocomplete="email"
                                            type="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="Enter your email"
                                            class="w-full rounded-xl border bg-white px-6 py-3 text-sm placeholder:text-gray-400 focus:outline-none"
                                        >
                                        <button 
                                            type="submit"
                                            class="absolute right-3 top-1/2 -translate-y-1/2 text-primary-600 hover:text-primary-700"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="m220.24 132.24l-72 72a6 6 0 0 1-8.48-8.48L201.51 134H40a6 6 0 0 1 0-12h161.51l-61.75-61.76a6 6 0 0 1 8.48-8.48l72 72a6 6 0 0 1 0 8.48" />
                                            </svg>
                                        </button>
                                    </div>
                                    @if (session('success'))
                                        <span class="text-green-500 text-sm mt-2 block">
                                            {{ session('success') }}
                                        </span>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="mt-10 border-t border-slate-200 pt-5 flex flex-col items-center justify-center">
                    <p class="text-sm text-gray-500">
                        © 2024 {{ $setting->organization_name ?? 'Firefly Blog' }}. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Mobile Bottom Nav (Sticky) -->
        <div class="fixed bottom-0 left-0 z-50 h-16 w-full border-t border-gray-200 bg-white sm:hidden">
            <div class="mx-auto grid h-full max-w-md grid-cols-2">
                <!-- Home Link -->
                <a 
                    href="{{ route('filamentblog.post.index') }}" 
                    class="flex flex-col items-center justify-center hover:bg-gray-50 transition duration-200"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 w-6 h-6 text-gray-500" viewBox="0 0 256 256">
                        <path 
                            fill="currentColor" 
                            d="m217.47 105.24l-80-75.5l-.09-.08a13.94 13.94 0 0 0-18.83 0l-.09.08l-80 75.5A14 14 0 0 0 34 115.55V208a14 14 0 0 0 14 14h48a14 14 0 0 0 14-14v-48a2 2 0 0 1 2-2h32a2 2 0 0 1 2 2v48a14 14 0 0 0 14 14h48a14 14 0 0 0 14-14v-92.45a14 14 0 0 0-4.53-10.31M210 208a2 2 0 0 1-2 2h-48a2 2 0 0 1-2-2v-48a14 14 0 0 0-14-14h-32a14 14 0 0 0-14 14v48a2 2 0 0 1-2 2H48a2 2 0 0 1-2-2v-92.45a2 2 0 0 1 .65-1.48l.09-.08l79.94-75.48a2 2 0 0 1 2.63 0L209.26 114l.08.08a2 2 0 0 1 .66 1.48Z"
                        />
                    </svg>
                    <span class="text-xs text-gray-500">Home</span>
                </a>
                <!-- All Posts Link -->
                <a 
                    href="{{ route('filamentblog.post.all') }}" 
                    class="flex flex-col items-center justify-center hover:bg-gray-50 transition duration-200"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 w-6 h-6 text-gray-500" viewBox="0 0 256 256">
                        <path 
                            fill="currentColor" 
                            d="M216 40H40a16 16 0 0 0-16 16v160a8 8 0 0 0 11.58 7.15L64 208.94l28.42 14.21a8 8 0 0 0 7.16 0L128 208.94l28.42 14.21a8 8 0 0 0 7.16 0L192 208.94l28.42 14.21A8 8 0 0 0 232 216V56a16 16 0 0 0-16-16m0 163.06l-20.42-10.22a8 8 0 0 0-7.16 0L160 207.06l-28.42-14.22a8 8 0 0 0-7.16 0L96 207.06l-28.42-14.22a8 8 0 0 0-7.16 0L40 203.06V56h176ZM136 112a8 8 0 0 1 8-8h48a8 8 0 0 1 0 16h-48a8 8 0 0 1-8-8m0 32a8 8 0 0 1 8-8h48a8 8 0 0 1 0 16h-48a8 8 0 0 1-8-8m-72 24h48a8 8 0 0 0 8-8V96a8 8 0 0 0-8-8H64a8 8 0 0 0-8 8v64a8 8 0 0 0 8 8m8-64h32v48H72Z"
                        />
                    </svg>
                    <span class="text-xs text-gray-500">All Posts</span>
                </a>
            </div>
        </div>
    </div>

    <!-- reCAPTCHA & Comment Form Submit -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("comment-box").submit();
        }
    </script>
</body>

</html>
