<!-- Primary Meta Tags -->
<meta name="title" content="LaravelHelp - Expert Laravel Consulting, Performance Audits & Development">
<meta name="description" content="Expert Laravel consulting services. I help businesses optimize performance, fix critical bugs, conduct code audits, and scale Laravel applications. Get professional help from a senior Laravel developer.">
<meta name="keywords" content="Laravel consulting, Laravel developer, Laravel expert, PHP consulting, Laravel performance optimization, Laravel code audit, Laravel bug fixing, Livewire developer, Laravel API development, Laravel migration, Laravel upgrade, PHP developer, Laravel freelancer, Laravel agency, Laravel support, Laravel maintenance, Laravel security audit, Laravel scalability, Laravel architecture, Laravel best practices, Laravel slow app, PHP slow performance, Laravel app running slow, fix slow Laravel, Laravel optimization help, Laravel website slow, PHP application slow, Laravel performance issues, Laravel loading slow, slow Laravel queries, Laravel memory issues, Laravel timeout errors, fix Laravel bugs, Laravel application not working, Laravel error fixing, PHP performance problems, speed up Laravel, Laravel bottleneck, optimize Laravel app, Laravel high CPU usage">
<meta name="author" content="Andrés Pineda">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url('/') }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url('/') }}">
<meta property="og:title" content="LaravelHelp - Expert Laravel Consulting & Audits">
<meta property="og:description" content="Expert Laravel consulting services. I help businesses optimize performance, fix critical bugs, conduct code audits, and scale Laravel applications.">
<meta property="og:image" content="{{ asset('assets/img/og-image.png') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="LaravelHelp">
<meta property="og:locale" content="en_US">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url('/') }}">
<meta name="twitter:title" content="LaravelHelp - Expert Laravel Consulting & Audits">
<meta name="twitter:description" content="Expert Laravel consulting services. I help businesses optimize performance, fix critical bugs, conduct code audits, and scale Laravel applications.">
<meta name="twitter:image" content="{{ asset('assets/img/og-image.png') }}">

<!-- Additional SEO -->
<meta name="theme-color" content="#DC3545">
<meta name="msapplication-TileColor" content="#DC3545">

<!-- Favicon for Google -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
<link rel="icon" type="image/x-icon" sizes="48x48" href="{{ asset('assets/img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/img/logo/logo2.png') }}">

<!-- Plain-text summary for language models and AI agents (llmstxt.org) -->
<link rel="describedby" type="text/markdown" href="{{ url('/llms.txt') }}">

<!-- Structured data: who runs LaravelHelp, what it offers, and how to book -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Person",
            "@id": "https://laravelhelp.com/#andres-pineda",
            "name": "Andrés Pineda",
            "jobTitle": "Senior Laravel Consultant",
            "url": "https://laravelhelp.com",
            "email": "afpinedac@gmail.com",
            "sameAs": ["https://github.com/afpinedac"],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Medellín",
                "addressCountry": "CO"
            },
            "knowsAbout": ["Laravel", "PHP", "Livewire", "Inertia", "Vue.js", "MySQL", "PostgreSQL", "Redis", "AWS", "Laravel upgrades", "Performance optimization", "Code audits"]
        },
        {
            "@type": "WebSite",
            "@id": "https://laravelhelp.com/#website",
            "name": "LaravelHelp",
            "url": "https://laravelhelp.com"
        },
        {
            "@type": "ProfessionalService",
            "@id": "https://laravelhelp.com/#service",
            "name": "LaravelHelp",
            "description": "Independent Laravel consulting by Andrés Pineda, a senior Laravel engineer with 15+ years of experience: upgrades, performance audits, code reviews, bug fixing and senior Laravel capacity for teams. Remote, working US Eastern/Central hours.",
            "url": "https://laravelhelp.com",
            "logo": "https://laravelhelp.com/assets/img/logo/logo2.png",
            "image": "https://laravelhelp.com/assets/img/og-image.png",
            "email": "afpinedac@gmail.com",
            "priceRange": "From $60 USD per hour",
            "founder": {"@id": "https://laravelhelp.com/#andres-pineda"},
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Medellín",
                "addressCountry": "CO"
            },
            "areaServed": [
                {"@type": "Country", "name": "United States"},
                {"@type": "Place", "name": "Worldwide"}
            ],
            "availableLanguage": ["English", "Spanish"],
            "sameAs": ["https://github.com/afpinedac"],
            "serviceType": [
                "Laravel Consulting",
                "Laravel Upgrades",
                "Performance Optimization",
                "Code Audit",
                "Bug Fixing",
                "Laravel Development"
            ],
            "potentialAction": {
                "@type": "ReserveAction",
                "name": "Book a free 30-minute Laravel consultation",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "{{ config('config.booking_url') }}",
                    "actionPlatform": ["https://schema.org/DesktopWebPlatform", "https://schema.org/MobileWebPlatform"]
                }
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Laravel services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "name": "Free 30-minute Laravel consultation",
                        "price": "0",
                        "priceCurrency": "USD",
                        "url": "{{ config('config.booking_url') }}",
                        "itemOffered": {"@type": "Service", "name": "Free Laravel audit call", "description": "A 30-minute video call to review your application's problems and leave with concrete next steps. No code access needed."}
                    },
                    {
                        "@type": "Offer",
                        "name": "Help Me Now urgent session",
                        "price": "120",
                        "priceCurrency": "USD",
                        "url": "{{ config('config.booking_url') }}",
                        "itemOffered": {"@type": "Service", "name": "Urgent 1-hour Laravel consultation", "description": "A paid priority session for urgent production issues."}
                    },
                    {
                        "@type": "Offer",
                        "name": "Hourly Laravel consulting and development",
                        "priceSpecification": {"@type": "UnitPriceSpecification", "minPrice": "60", "priceCurrency": "USD", "unitCode": "HUR", "unitText": "hour"},
                        "itemOffered": {"@type": "Service", "name": "Laravel consulting and development, billed hourly"}
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {"@type": "Service", "name": "Laravel and PHP upgrades", "description": "Move an application off unsupported Laravel or PHP versions in small, tested steps."}
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {"@type": "Service", "name": "Laravel performance audit", "description": "Find and fix slow queries, N+1 problems, caching and queue bottlenecks."}
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {"@type": "Service", "name": "Laravel code review", "description": "Architecture, security and maintainability review with a prioritized action list."}
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {"@type": "Service", "name": "Laravel development", "description": "New features, bug fixing and maintenance for existing Laravel applications."}
                    }
                ]
            }
        },
        {
            "@type": "FAQPage",
            "@id": "https://laravelhelp.com/#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What happens during the free 30-minute audit?",
                    "acceptedAnswer": {"@type": "Answer", "text": "It's a focused session where we discuss your Laravel application's pain points (performance, bugs, outdated code, etc.). You can share your screen, show specific code snippets, or describe the issues. I'll provide initial analysis, identify potential root causes, and suggest actionable steps you can take. You'll leave with valuable insights, whether you decide to hire me or not."}
                },
                {
                    "@type": "Question",
                    "name": "Do I need to give you access to my code for the free audit?",
                    "acceptedAnswer": {"@type": "Answer", "text": "No, full access is not required for the initial 30-minute audit. You can share specific code snippets via screenshare or describe the problems you're facing. If we decide to work together on a larger project, we can discuss secure access methods then, often via a temporary, read-only account on your Git repository."}
                },
                {
                    "@type": "Question",
                    "name": "What kind of Laravel problems can you help with?",
                    "acceptedAnswer": {"@type": "Answer", "text": "I specialize in tackling common Laravel issues like slow performance (database queries, N+1 problems, caching), upgrading older Laravel/PHP versions, fixing complex bugs, improving application architecture for maintainability, implementing automated tests, enhancing security, and updating outdated dependencies safely."}
                },
                {
                    "@type": "Question",
                    "name": "How much do your services cost after the free audit?",
                    "acceptedAnswer": {"@type": "Answer", "text": "Hourly work starts at $60 USD per hour. After the free audit, if you'd like to proceed, I'll send a detailed proposal with clear deliverables and pricing options: hourly, a fixed project fee, or a retainer. Fixed fees depend on the project's scope and complexity."}
                },
                {
                    "@type": "Question",
                    "name": "Do you work with teams or just solo developers?",
                    "acceptedAnswer": {"@type": "Answer", "text": "I work with both! I can augment existing development teams by providing specialized Laravel expertise, help train your team on best practices, or take on specific refactoring/optimization tasks. I also work directly with businesses or solo developers who need dedicated help improving their Laravel applications."}
                },
                {
                    "@type": "Question",
                    "name": "What is the \"Help Me Now\" service and how does it differ from the free audit?",
                    "acceptedAnswer": {"@type": "Answer", "text": "The \"Help Me Now\" service is a paid, 1-hour priority consultation session designed for urgent issues that require immediate attention. It costs $120 USD and allows you to book a dedicated slot quickly on my booking page for in-depth troubleshooting or guidance. The free audit is a 30-minute introductory call to discuss your application's general health, identify potential areas for improvement, and see if we're a good fit to work together on larger tasks."}
                }
            ]
        }
    ]
}
</script>
