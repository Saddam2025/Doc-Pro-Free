<head>
    <!-- ✅ Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="description" content="@yield('meta_description', 'Create invoices, CVs, receipts, and agreements instantly for free with Doc Pro.')">
    <meta name="keywords" content="@yield('meta_keywords', 'free document generator, online invoice maker, document creator, CV builder, receipt generator, professional templates')">
    <meta name="author" content="Doc Pro Team">
    <meta name="theme-color" content="#2563eb">

    <!-- ✅ SEO Optimized Title -->
    <title>@yield('title', 'Free Document Maker | Create Invoices, CVs & More - Doc Pro')</title>

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- ✅ Preload Critical Resources -->
    <link rel="preload" as="image" href="{{ asset('images/Logo.webp') }}" type="image/webp">
    <link rel="preload" as="style" href="{{ asset('css/app.css') }}">
    <link rel="preload" as="script" href="{{ asset('js/app.js') }}">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" as="style">

    <!-- ✅ Favicon & Icons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <!-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Doc Pro - Free Document Generator')">
    <meta property="og:description" content="@yield('meta_description', 'Generate invoices, receipts, and agreements instantly for free.')">
    <meta property="og:image" content="{{ asset('images/preview.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Doc Pro">
    <meta property="og:locale" content="en_US">

    <!-- ✅ Twitter Card (For Twitter Previews) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Doc Pro - Free Document Generator')">
    <meta name="twitter:description" content="@yield('meta_description', 'Generate invoices, receipts, and agreements instantly for free.')">
    <meta name="twitter:image" content="{{ asset('images/preview.png') }}">
    <meta name="twitter:site" content="@YourActualTwitterHandle"> <!-- Update this -->

    <!-- ✅ Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

    <!-- ✅ Schema Markup (Structured Data for SEO) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Doc Pro - Free Document Generator",
        "url": "https://www.freedocumentmaker.com",
        "description": "@yield('meta_description', 'Generate invoices, CVs, receipts, and agreements instantly for free with easy-to-use tools.')",
        "publisher": {
            "@type": "Organization",
            "name": "Doc Pro",
            "url": "https://www.freedocumentmaker.com",
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.freedocumentmaker.com/images/logo.png"
            }
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.freedocumentmaker.com/search?q={search_term}",
            "query-input": "required name=search_term"
        }
        @if(isset($schema_additional))
        , {!! json_encode($schema_additional, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        @endif
    }
    </script>

    <!-- ✅ Breadcrumb Schema -->
    @if(isset($breadcrumb) && is_array($breadcrumb))
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.freedocumentmaker.com"
            }
            @foreach($breadcrumb as $index => $item)
            ,{
                "@type": "ListItem",
                "position": {{ $index + 2 }},
                "name": "{{ $item['name'] }}",
                "item": "{{ $item['url'] }}"
            }
            @endforeach
        ]
    }
    </script>
    @endif

    <!-- ✅ Google AdSense (Lazy Load for Performance) -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2081671021537614" crossorigin="anonymous"></script>

    <!-- ✅ Minimized Google Analytics (If Needed) -->
    @if(isset($setting->google_analytic_code))
        {!! $setting->google_analytic_code !!}
    @endif
</head>
