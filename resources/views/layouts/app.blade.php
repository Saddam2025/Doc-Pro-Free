<!DOCTYPE html>
<html lang="{{ app()->getLocale() ?? config('app.locale', 'en') }}" class="scroll-smooth">

<head>
    <!-- Essential Meta & SEO -->
    @include('layouts.partials.head')

    <!-- Load Assets via Vite with Fallback -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </noscript>

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Custom Global Styles -->
    <style>
        html {
            visibility: hidden;
            opacity: 0;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            padding-top: 80px;
            min-height: 100vh;
        }

        /* Back-to-Top Button Styling */
        #backToTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 12px 16px;
            font-size: 14px;
            border-radius: 50%;
            background: #2563eb;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #backToTop:hover {
            background: #1e40af;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.documentElement.style.visibility = "visible";
            document.documentElement.style.opacity = "1";
        });
    </script>
</head>

<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 antialiased flex flex-col min-h-screen">
    
    <!-- Navbar (Fixed) -->
    <header class="w-full fixed top-0 left-0 bg-white shadow-md z-50 h-[70px]">
        @include('layouts.partials.navbar', ['title' => 'Free Document Maker - Effortless Document Generation'])
    </header>

    <!-- Main Content Area -->
    <main class="flex-1">
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <!-- Footer -->
    @once
        <footer class="w-full bg-gray-800 text-white py-6 text-left">
            @include('layouts.partials.footer')
        </footer>
    @endonce

    <!-- Back-to-Top Button -->
    <button id="backToTop" aria-label="Back to Top" class="focus:outline-none">↑</button>

    <!-- Scripts -->
    @include('layouts.partials.scripts')
    @livewireScripts

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const backToTop = document.getElementById("backToTop");

            window.addEventListener("scroll", () => {
                backToTop.style.display = window.scrollY > 300 ? "block" : "none";
            });

            backToTop.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });

            backToTop.addEventListener("keydown", (event) => {
                if (event.key === "Enter" || event.key === " ") {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                }
            });
        });
    </script>
</body>
</html>
