@extends('layouts.app')

@section('title', 'Terms and Conditions | Transparent & Secure | Doc Pro')
@section('meta_description', 'Review the terms and conditions for using Doc Pro, a secure and professional free document generator. Clear rules for user agreements and legal compliance.')
@section('meta_keywords', 'terms and conditions, Doc Pro, free document generator, user agreement, usage policy, legal compliance, platform rules, Bangladesh jurisdiction')

@section('schema')
<!-- ✅ SEO-Optimized Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Terms and Conditions | Transparent & Secure | Doc Pro",
  "description": "Review the terms and conditions for using Doc Pro, a secure and professional free document generator. Clear rules for user agreements and legal compliance.",
  "url": "{{ url()->current() }}",
  "image": {
    "@type": "ImageObject",
    "url": "https://freedocumentmaker.com/images/article-thumbnail.png",
    "width": 1200,
    "height": 630
  },
  "datePublished": "2024-01-01T00:00:00+00:00",
  "dateModified": "2024-01-01T00:00:00+00:00",
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
  "termsOfService": "https://freedocumentmaker.com/terms-and-conditions"
}
</script>
@endsection

@section('content')

{{-- ✅ Hero Section --}}
<section class="bg-gradient-to-r from-blue-100 to-blue-50 py-20 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-extrabold text-blue-600 mb-6 flex items-center justify-center">
            <i class="fas fa-file-contract text-blue-800 mr-4"></i> Terms and Conditions
        </h1>
        <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto">
            Welcome to <strong>Doc Pro</strong>. By using our services, you agree to our terms and conditions. Please read them carefully.
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
                    'General Terms' => 'general-terms',
                    'User Responsibilities' => 'user-responsibilities',
                    'Intellectual Property' => 'intellectual-property',
                    'Limitation of Liability' => 'limitation-of-liability',
                    'Termination of Services' => 'termination-of-services',
                    'Governing Law' => 'governing-law',
                    'Your Rights' => 'your-rights',
                    'Dispute Resolution' => 'dispute-resolution',
                    'Contact Us' => 'contact-us'
                ] as $title => $id)
                <li><a href="#{{ $id }}" class="hover:underline flex items-center"><i class="fas fa-chevron-right mr-2"></i> {{ $title }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>

{{-- ✅ Terms and Conditions Sections --}}
<section class="py-12 bg-white">
    <div class="container mx-auto max-w-5xl px-4 md:px-0">
        @foreach([
            ['icon' => 'info-circle', 'title' => 'Introduction', 'id' => 'introduction', 'content' => 'By accessing and using Doc Pro, you agree to comply with these terms and policies.'],
            ['icon' => 'gavel', 'title' => 'General Terms', 'id' => 'general-terms', 'content' => 'Users must be at least 18 years old or have parental consent. We may update terms as necessary.'],
            ['icon' => 'user-shield', 'title' => 'User Responsibilities', 'id' => 'user-responsibilities', 'content' => 'Users must not use Doc Pro for illegal or fraudulent activities.'],
            ['icon' => 'lightbulb', 'title' => 'Intellectual Property', 'id' => 'intellectual-property', 'content' => 'All content and branding belong to Doc Pro. Unauthorized use is prohibited.'],
            ['icon' => 'exclamation-triangle', 'title' => 'Limitation of Liability', 'id' => 'limitation-of-liability', 'content' => 'Doc Pro is not responsible for any damages from using our platform.'],
            ['icon' => 'times-circle', 'title' => 'Termination of Services', 'id' => 'termination-of-services', 'content' => 'We reserve the right to suspend accounts that violate terms.'],
            ['icon' => 'balance-scale', 'title' => 'Governing Law', 'id' => 'governing-law', 'content' => 'These terms are governed by the laws of Bangladesh.'],
            ['icon' => 'user', 'title' => 'Your Rights', 'id' => 'your-rights', 'content' => 'Users have the right to request access, modification, or deletion of their data.'],
            ['icon' => 'handshake', 'title' => 'Dispute Resolution', 'id' => 'dispute-resolution', 'content' => 'Disputes will be resolved through arbitration in Bangladesh.'],
            ['icon' => 'envelope-open-text', 'title' => 'Contact Us', 'id' => 'contact-us', 'content' => 'For inquiries, contact support@freedocumentmaker.com']
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

{{-- ✅ Google AdSense --}}
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
