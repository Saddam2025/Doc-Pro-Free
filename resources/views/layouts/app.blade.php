<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <!-- ✅ Essential Meta & SEO -->
    @include('layouts.partials.head')

    <!-- ✅ Load Assets via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ✅ Livewire Styles -->
    @livewireStyles

    <!-- ✅ Custom Global Styles -->
    <style>
        /* ✅ Ensure Consistent Layout */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }

        header {
            height: 70px;
            z-index: 50;
        }

        main {
            padding-top: 80px;
            min-height: 100vh;
        }

        /* ✅ Back-to-Top Button Styling */
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
</head>

<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 antialiased">

    <!-- ✅ Navbar (Fixed) -->
    <header class="w-full fixed top-0 left-0 bg-white shadow-md z-50 h-[70px]">
        @include('layouts.partials.navbar', ['title' => 'Free Document Maker - Effortless Document Generation'])
    </header>

    <!-- ✅ Main Content Area -->
    <main class="w-full px-4 sm:px-6 lg:px-8">
        @yield('content')
        {{ $slot ?? '' }} <!-- Blade Components Slot -->
    </main>

    <!-- ✅ Footer (Loaded Once for Performance) -->
    @once
        <footer class="w-full bg-gray-800 text-white py-6 text-left">
            @include('layouts.partials.footer')
        </footer>
    @endonce

    <!-- ✅ Back-to-Top Button -->
    <button id="backToTop" aria-label="Back to Top">↑</button>

    <!-- ✅ Scripts & Performance Enhancements -->
    @include('layouts.partials.scripts')

    <!-- ✅ Livewire Scripts -->
    @livewireScripts

    <!-- ✅ Back-to-Top Button Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const backToTop = document.getElementById("backToTop");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    backToTop.style.display = "block";
                } else {
                    backToTop.style.display = "none";
                }
            });

            backToTop.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    </script>

</body>
</html>
