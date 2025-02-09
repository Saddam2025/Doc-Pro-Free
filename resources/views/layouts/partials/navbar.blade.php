<!-- ✅ Navbar -->
<nav class="w-full bg-white dark:bg-gray-900 shadow-md py-4 fixed top-0 left-0 z-50">
    <div class="max-w-screen-xl mx-auto px-4 flex items-center justify-between">
        
        <!-- ✅ Brand Logo -->
        <a href="{{ route('home') }}" class="flex-shrink-0">
        <img src="{{ asset('images/Logo.webp') }}" 
     alt="Logo" 
     class="w-28 h-auto object-contain transition-transform transform hover:scale-105" 
     fetchpriority="high" 
     decoding="async"
     loading="eager">

        </a>

       <!-- Desktop Menu -->
       <div class="hidden md:flex flex-col">
                <!-- Row 1 -->
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-4">
                    @foreach([
                        ['route' => 'invoice.generator', 'icon' => 'fa-file-invoice', 'label' => 'Invoice'],
                        ['route' => 'credit.note.generator', 'icon' => 'fa-receipt', 'label' => 'Credit Note'],
                        ['route' => 'purchase.order.generator', 'icon' => 'fa-shopping-cart', 'label' => 'Purchase Order'],
                        ['route' => 'quote.generator', 'icon' => 'fa-quote-right', 'label' => 'Quote'],
                        ['route' => 'proforma.invoice.generator', 'icon' => 'fa-file-invoice-dollar', 'label' => 'Proforma Invoice'],
                        ['route' => 'delivery.note.generator', 'icon' => 'fa-truck', 'label' => 'Delivery Note'],
                        ['route' => 'payment.receipt.generator', 'icon' => 'fa-receipt', 'label' => 'Payment Receipt']
                    ] as $item)
                        <a href="{{ route($item['route']) }}" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                            <i class="fas {{ $item['icon'] }} mr-2"></i> {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>

                <!-- Row 2 -->
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-4 mt-2">
                    @foreach([
                        ['route' => 'expense.report.generator', 'icon' => 'fa-chart-line', 'label' => 'Expense Report'],
                        ['route' => 'business.card.generator', 'icon' => 'fa-id-card', 'label' => 'Business Card'],
                        ['route' => 'job.offer.letter.generator', 'icon' => 'fa-briefcase', 'label' => 'Job Offer Letter'],
                        ['route' => 'certificate.generator', 'icon' => 'fa-certificate', 'label' => 'Certificate'],
                        ['route' => 'agreement.generator', 'icon' => 'fa-handshake', 'label' => 'Agreement'],
                        ['route' => 'cv.generator', 'icon' => 'fa-user-tie', 'label' => 'CV']
                    ] as $item)
                        <a href="{{ route($item['route']) }}" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                            <i class="fas {{ $item['icon'] }} mr-2"></i> {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>


        <!-- ✅ Authentication & Profile -->
        <div class="hidden md:flex items-center space-x-4">
            @auth
                <div class="relative">
                    <button id="profileDropdown" class="flex items-center space-x-2 text-gray-800 dark:text-white focus:outline-none">
                        <i class="fas fa-user-circle text-2xl"></i>
                        <span>{{ auth()->user()->name }}</span>
                    </button>
                    <!-- ✅ Profile Dropdown -->
                    <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600">
                            Profile
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-200 dark:hover:bg-gray-600">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-4 py-2 border-2 border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                    Register
                </a>
            @endauth
        </div>

        <!-- ✅ Mobile Menu Toggle -->
        <button id="navbarToggler" class="md:hidden text-gray-700 dark:text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- ✅ Mobile Menu -->
    <div id="mobileMenu" class="hidden bg-white dark:bg-gray-800 w-full px-6 py-4 absolute top-16 left-0 shadow-lg">
        <div class="flex flex-col space-y-3">
            @foreach([
                ['route' => 'invoice.generator', 'icon' => 'fa-file-invoice', 'label' => 'Invoice'],
                ['route' => 'credit.note.generator', 'icon' => 'fa-receipt', 'label' => 'Credit Note'],
                ['route' => 'purchase.order.generator', 'icon' => 'fa-shopping-cart', 'label' => 'Purchase Order'],
                ['route' => 'quote.generator', 'icon' => 'fa-quote-right', 'label' => 'Quote'],
                ['route' => 'proforma.invoice.generator', 'icon' => 'fa-file-invoice-dollar', 'label' => 'Proforma Invoice'],
                ['route' => 'delivery.note.generator', 'icon' => 'fa-truck', 'label' => 'Delivery Note'],
                ['route' => 'payment.receipt.generator', 'icon' => 'fa-receipt', 'label' => 'Payment Receipt'],
                ['route' => 'expense.report.generator', 'icon' => 'fa-chart-line', 'label' => 'Expense Report'],
                ['route' => 'business.card.generator', 'icon' => 'fa-id-card', 'label' => 'Business Card'],
                ['route' => 'job.offer.letter.generator', 'icon' => 'fa-briefcase', 'label' => 'Job Offer Letter'],
                ['route' => 'certificate.generator', 'icon' => 'fa-certificate', 'label' => 'Certificate'],
                ['route' => 'agreement.generator', 'icon' => 'fa-handshake', 'label' => 'Agreement'],
                ['route' => 'cv.generator', 'icon' => 'fa-user-tie', 'label' => 'CV']
            ] as $item)
                <a href="{{ route($item['route']) }}"
                   class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                    <i class="fas {{ $item['icon'] }} mr-2"></i>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>

<!-- ✅ Push Content Down to Avoid Navbar Overlap -->
<style>
    body {
        padding-top: 64px;
    }

    /* ✅ Mobile Menu Toggle */
    #mobileMenu {
        display: none;
    }

    /* ✅ Dropdown Menu */
    #profileMenu {
        display: none;
    }
</style>

<!-- ✅ Navbar Interactivity -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Toggle Mobile Menu
        const navbarToggler = document.getElementById("navbarToggler");
        const mobileMenu = document.getElementById("mobileMenu");

        navbarToggler.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });

        // Toggle Profile Dropdown
        const profileDropdown = document.getElementById("profileDropdown");
        const profileMenu = document.getElementById("profileMenu");

        if (profileDropdown) {
            profileDropdown.addEventListener("click", function () {
                profileMenu.classList.toggle("hidden");
            });

            document.addEventListener("click", function (event) {
                if (!profileDropdown.contains(event.target) && !profileMenu.contains(event.target)) {
                    profileMenu.classList.add("hidden");
                }
            });
        }
    });
</script>
