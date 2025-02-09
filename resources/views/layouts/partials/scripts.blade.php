<!-- ✅ Preload Bootstrap CSS for Faster Rendering -->
<link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap-grid.min.css" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap-grid.min.css"></noscript>

<!-- ✅ Preload FontAwesome Icons -->
<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"></noscript>

<!-- ✅ Main Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/app.min.css') }}"> <!-- Minified Custom CSS -->

<!-- ✅ Load Bootstrap JS (Optimized) -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ Load FontAwesome JS Only When Needed -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faScript = document.createElement("script");
        faScript.src = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js";
        faScript.defer = true;
        document.body.appendChild(faScript);
    });
</script>

<!-- ✅ Load Livewire Only on Dashboard (Performance Boost) -->
@if (request()->routeIs('dashboard'))
    <script defer src="{{ asset('livewire/livewire.min.js') }}"></script>
@endif

<!-- ✅ Lazy Load Google Ads (Improves FCP/LCP) -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            const adScript = document.createElement("script");
            adScript.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-208...";
            adScript.async = true;
            document.body.appendChild(adScript);
        }, 3000); // Loads ads after 3 seconds (Reduces render blocking)
    });
</script>

<!-- ✅ Back-to-Top Button (Optimized) -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const backToTopBtn = document.getElementById('backToTop');

        if (backToTopBtn) {
            window.addEventListener('scroll', () => {
                backToTopBtn.classList.toggle('opacity-100', window.scrollY > 300);
                backToTopBtn.classList.toggle('hidden', window.scrollY <= 300);
            });

            backToTopBtn.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    });
</script>

<!-- ✅ Custom App JS (Deferred & Minified) -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const appScript = document.createElement("script");
        appScript.src = "{{ asset('assets/app.min.js') }}";
        appScript.defer = true;
        document.body.appendChild(appScript);
    });
</script>
