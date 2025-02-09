@extends('layouts.app')

@section('title', 'Privacy Policy | Secure & Transparent | Doc Pro')
@section('meta_description', 'Learn how Doc Pro protects your privacy and secures your data with GDPR & CCPA compliance. Review our privacy practices, cookie policy, and data protection measures.')
@section('meta_keywords', 'privacy policy, Doc Pro, GDPR compliance, data security, user rights, CCPA compliance, encryption, document generator privacy, cookie policy, secure platform')

@push('scripts')
    <!-- ✅ Google AdSense Integration -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2081671021537614" crossorigin="anonymous"></script>
@endpush

@section('schema')
<!-- ✅ Structured Data (SEO-Optimized) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy | Secure & Transparent | Doc Pro",
  "description": "Learn how Doc Pro protects your privacy and secures your data with GDPR & CCPA compliance. Review our privacy practices, cookie policy, and data protection measures.",
  "url": "{{ url()->current() }}",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://freedocumentmaker.com/privacy-policy"
  },
  "author": {
    "@type": "Organization",
    "name": "Doc Pro",
    "url": "https://freedocumentmaker.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://freedocumentmaker.com/favicon.png",
      "width": 512,
      "height": 512
    }
  },
  "publisher": {
    "@type": "Organization",
    "name": "Doc Pro",
    "logo": {
      "@type": "ImageObject",
      "url": "https://freedocumentmaker.com/favicon.png",
      "width": 512,
      "height": 512
    }
  },
  "license": "https://freedocumentmaker.com/privacy-policy"
}
</script>
@endsection

@section('content')

{{-- ✅ Hero Section --}}
<section class="bg-blue-100 py-16 text-center">
    <div class="container mx-auto px-6 lg:px-16">
        <h1 class="text-4xl font-extrabold text-gray-800">Privacy Policy</h1>
        <p class="text-lg text-gray-600 mt-4">
            Transparency and security are our priorities. Learn how Doc Pro safeguards your privacy and data security.
        </p>
    </div>
</section>

{{-- ✅ Table of Contents --}}
<section class="py-8 bg-white">
    <div class="container mx-auto px-6">
        <nav aria-label="Table of Contents">
            <ul class="flex flex-wrap justify-center space-x-4 text-blue-600">
                @foreach([
                    'Introduction' => 'introduction',
                    'Information We Collect' => 'information-we-collect',
                    'How We Use Your Information' => 'how-we-use-your-information',
                    'Cookies & Tracking' => 'cookies-and-tracking',
                    'Third-Party Services' => 'third-party-services',
                    'How We Protect Your Data' => 'how-we-protect-your-data',
                    'Your Rights' => 'your-rights',
                    'Legal Compliance' => 'legal-compliance',
                    'Contact Us' => 'contact-us'
                ] as $title => $id)
                <li><a href="#{{ $id }}" class="hover:underline flex items-center"><i class="fas fa-chevron-right mr-2"></i> {{ $title }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>

{{-- ✅ Privacy Policy Sections --}}
<section class="py-12 bg-white">
    <div class="container mx-auto max-w-5xl px-4 md:px-0">
        @foreach([
            ['icon' => 'info-circle', 'title' => 'Introduction', 'id' => 'introduction', 'content' => 'We value your privacy and transparency in data collection. This policy outlines how we handle your information securely.'],
            ['icon' => 'clipboard-list', 'title' => 'Information We Collect', 'id' => 'information-we-collect', 'content' => 'We collect personal information (e.g., name, email) and non-personal usage data to improve our services.'],
            ['icon' => 'briefcase', 'title' => 'How We Use Your Information', 'id' => 'how-we-use-your-information', 'content' => 'Your data helps us enhance security, personalize user experience, and improve platform functionality.'],
            ['icon' => 'cookie-bite', 'title' => 'Cookies & Tracking', 'id' => 'cookies-and-tracking', 'content' => 'We use cookies to optimize performance and analyze website interactions. You can control cookies in browser settings.'],
            ['icon' => 'handshake', 'title' => 'Third-Party Services', 'id' => 'third-party-services', 'content' => 'We may share data with analytics providers and advertisers, ensuring full compliance with privacy laws.'],
            ['icon' => 'lock', 'title' => 'How We Protect Your Data', 'id' => 'how-we-protect-your-data', 'content' => 'Your data is encrypted, access is restricted, and we conduct regular security audits to prevent breaches.'],
            ['icon' => 'user-shield', 'title' => 'Your Rights', 'id' => 'your-rights', 'content' => 'You have the right to access, modify, or delete your data. Contact us for any privacy-related requests.'],
            ['icon' => 'gavel', 'title' => 'Legal Compliance', 'id' => 'legal-compliance', 'content' => 'We comply with GDPR and CCPA regulations to ensure legal compliance and data security.'],
            ['icon' => 'envelope-open-text', 'title' => 'Contact Us', 'id' => 'contact-us', 'content' => 'For any privacy concerns, reach out to us at support@freedocumentmaker.com.']
        ] as $section)
        <div class="mb-12" id="{{ $section['id'] }}">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-{{ $section['icon'] }} text-blue-600 mr-3"></i> {{ $section['title'] }}
            </h2>
            <p class="text-lg text-gray-700 leading-relaxed">{{ $section['content'] }}</p>
        </div>
        @endforeach
    </div>
</section>

{{-- ✅ Google AdSense Integration --}}
<section class="py-16 bg-white text-center">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:block;width:100%;height:auto"
         data-ad-client="ca-pub-2081671021537614"
         data-ad-slot="7423037944"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</section>

@endsection
