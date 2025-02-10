<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <!-- Top Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 gap-y-8">
            
            <!-- About Section -->
            <div>
                <h3 class="text-lg sm:text-xl font-semibold border-b border-blue-500 pb-3">About Doc Pro</h3>
                <p class="text-gray-300 mt-4 text-sm sm:text-base leading-relaxed">
                    Your trusted solution for creating professional documents—free, fast, and easy! From invoices to CVs, we help you achieve polished results in no time.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg sm:text-xl font-semibold border-b border-blue-500 pb-3">Quick Links</h3>
                <ul class="text-gray-300 mt-4 text-sm sm:text-base space-y-2">
                    <li><a href="{{ route('about') }}" class="hover:text-blue-400">About Us</a></li>
                    <li><a href="{{ route('privacy') }}" class="hover:text-blue-400">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-blue-400">Terms of Service</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-400">Contact Us</a></li>
                    <li><a href="{{ route('faq') }}" class="hover:text-blue-400">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-lg sm:text-xl font-semibold border-b border-blue-500 pb-3">Contact Us</h3>
                <p class="text-gray-300 mt-4 text-sm sm:text-base">
                    <strong>Email:</strong> <a href="mailto:info@freedocumentmaker.com" class="hover:text-blue-400">info@freedocumentmaker.com</a>
                </p>
                <p class="text-gray-300 mt-2 text-sm sm:text-base">
                    <strong>Phone:</strong> <a href="tel:+8801921727383" class="hover:text-blue-400">+8801921727383</a>
                </p>
                <p class="text-gray-300 mt-2 text-sm sm:text-base">
                    <strong>Address:</strong> 7 Masjed Road, Pagla, Fatullah, Narayanganj, Bangladesh, ZIP 1421
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="https://facebook.com/docprofree" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="hover:text-blue-400">
                        <i class="fab fa-facebook-square text-xl" aria-hidden="true"></i>
                    </a>
                    <a href="https://x.com/saadkhan112233" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="hover:text-blue-400">
                        <i class="fab fa-twitter-square text-xl" aria-hidden="true"></i>
                    </a>
                    <a href="https://linkedin.com/company/docpro" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="hover:text-blue-400">
                        <i class="fab fa-linkedin text-xl" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/@DocPro-FreeDocumentMaker" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="hover:text-red-500">
                        <i class="fab fa-youtube text-xl" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- Newsletter Subscription -->
            <div>
                <h3 class="text-lg sm:text-xl font-semibold border-b border-blue-500 pb-3">Stay Updated</h3>
                <p class="text-gray-300 mt-4 text-sm sm:text-base">
                    Subscribe to our newsletter for the latest updates and offers.
                </p>
                <form id="newsletterForm" action="{{ route('subscribe') }}" method="POST" class="flex mt-4">
                    @csrf
                    <input id="newsletterEmail" type="email" name="email" class="p-3 rounded-l-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Subscribe
                    </button>
                </form>
                <p id="newsletterMessage" class="mt-2 text-sm text-green-400"></p>
            </div>
        </div>

        <!-- Divider -->
        <hr class="border-gray-700 my-8">

        <!-- Copyright -->
        <div class="text-center text-gray-300 text-sm">
            <p>&copy; {{ date('Y') }} Doc Pro. All Rights Reserved.</p>
            <p>Designed with <span class="text-red-500">&#10084;</span> by the Doc Pro Team.</p>
        </div>
    </div>
</footer>

<!-- ✅ SEO Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Doc Pro",
    "description": "Doc Pro is a free online document generator for invoices, CVs, receipts, and agreements.",
    "url": "https://www.freedocumentmaker.com",
    "logo": "https://www.freedocumentmaker.com/logo.png",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+8801921727383",
        "contactType": "customer service",
        "email": "info@freedocumentmaker.com"
    },
    "sameAs": [
        "https://facebook.com/docprofree",
        "https://x.com/saadkhan112233",
        "https://linkedin.com/company/docpro",
        "https://www.youtube.com/@DocPro-FreeDocumentMaker"
    ]
}
</script>


<!-- ✅ Newsletter Form Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('newsletterForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const emailInput = document.getElementById('newsletterEmail');
        const messageBox = document.getElementById('newsletterMessage');
        
        fetch("{{ route('subscribe') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ email: emailInput.value })
        })
        .then(response => response.json())
        .then(data => {
            messageBox.innerText = data.message;
            messageBox.style.color = "green";
            emailInput.value = "";
        })
        .catch(error => {
            messageBox.innerText = "Something went wrong. Please try again.";
            messageBox.style.color = "red";
            console.error('Error:', error);
        });
    });
});

</script>
