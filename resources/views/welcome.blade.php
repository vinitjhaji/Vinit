<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Com.bot | AI Unified Business Communication Platform</title>
    <meta
        name="description"
        content="Connect with customers across WhatsApp, Instagram, Facebook and web chat from one unified business communication platform."
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body { margin: 0; font-family: 'Inter', sans-serif; background: #050816; color: #f4f7ff; }
            .container { width: min(1120px, 92%); margin-inline: auto; }
        </style>
    @endif
</head>
<body>
@php
    $features = [
        ['title' => 'WhatsApp Business API', 'description' => 'Official Meta Business Partner integration with direct API access and verified delivery.'],
        ['title' => 'Unified Team Inbox', 'description' => 'Handle all customer conversations in one collaborative workspace with role-based access.'],
        ['title' => 'Visual Bot Builder', 'description' => 'Build chatbot journeys with drag-and-drop flows and reusable automation blocks.'],
        ['title' => 'Native Payments', 'description' => 'Accept payments directly in chat to reduce checkout friction and increase conversions.'],
        ['title' => 'Multi-Channel Support', 'description' => 'Manage WhatsApp, Instagram, Facebook Messenger, and web widget threads in one view.'],
        ['title' => 'Automation Builder', 'description' => 'Connect 1000+ tools and trigger workflows for lead qualification, support, and follow-up.'],
    ];

    $solutions = [
        'Bulk Messaging', 'Order Updates', 'Customer Support', 'Smart Chatbots',
        'Notifications', 'Payment Collection', 'External Integrations', 'Team Collaboration',
    ];

    $stats = [
        ['value' => '23,000+', 'label' => 'Active Customers'],
        ['value' => '100+', 'label' => 'Government Bodies'],
        ['value' => '500+', 'label' => 'Global Partners'],
        ['value' => '50+', 'label' => 'Countries Served'],
        ['value' => '25M+', 'label' => 'Messages / Day'],
        ['value' => '100K+', 'label' => 'Bots Created'],
    ];

    $brands = [
        [
            'name' => '11 Automations',
            'description' => 'Enterprise-grade automation solutions built for teams that need reliability, control, and scale.',
        ],
        [
            'name' => 'Automations Builder',
            'description' => 'A no-code workflow platform that helps non-technical teams automate repetitive business operations.',
        ],
        [
            'name' => '1 Automations',
            'description' => 'Simple automation tools for smaller businesses to streamline day-to-day communication and support.',
        ],
    ];
@endphp

<header class="site-header">
    <div class="container nav-wrapper">
        <a href="#" class="brand">Com.bot</a>
        <nav class="main-nav">
            <a href="#features">Features</a>
            <a href="#solutions">Solutions</a>
            <a href="#stats">Stats</a>
            <a href="#contact">Contact</a>
        </nav>
        <a class="nav-cta" href="https://v3.com.bot/register" target="_blank" rel="noopener noreferrer">Get Started</a>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <p class="eyebrow">Official Partner · Meta Business Solution</p>
                <h1>AI Unified Business Communication Platform</h1>
                <p class="hero-text">
                    Connect with customers across all channels through one powerful dashboard.
                    Automate conversations, increase sales, and deliver exceptional support.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="https://wa.me/918069871810?text=inquire" target="_blank" rel="noopener noreferrer">Schedule a Call</a>
                    <a class="btn btn-secondary" href="https://v3.com.bot/register" target="_blank" rel="noopener noreferrer">Get Started</a>
                </div>
                <ul class="channel-list">
                    <li>WhatsApp Business</li>
                    <li>Facebook Messenger</li>
                    <li>Instagram DM</li>
                    <li>Web Widget</li>
                </ul>
            </div>
            <div class="hero-card">
                <p class="hero-card-label">Live Automation Snapshot</p>
                <h3>Conversations that convert.</h3>
                <ul>
                    <li><span>Lead qualification</span><strong>+48%</strong></li>
                    <li><span>Response time</span><strong>&lt; 60 sec</strong></li>
                    <li><span>Support tickets resolved</span><strong>24/7</strong></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="features" class="section">
        <div class="container">
            <h2>Powerful Features</h2>
            <p class="section-subtitle">Everything you need to automate and scale business communication.</p>
            <div class="card-grid three-col">
                @foreach ($features as $feature)
                    <article class="card">
                        <h3>{{ $feature['title'] }}</h3>
                        <p>{{ $feature['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="solutions" class="section alt-bg">
        <div class="container">
            <h2>Business Solutions</h2>
            <p class="section-subtitle">Discover how Com.bot transforms every stage of the customer journey.</p>
            <div class="card-grid four-col">
                @foreach ($solutions as $solution)
                    <article class="card solution-card">
                        <h3>{{ $solution }}</h3>
                        <p>Built to improve speed, consistency, and customer experience across every touchpoint.</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="stats" class="section">
        <div class="container">
            <h2>Trusted Globally</h2>
            <p class="section-subtitle">Join thousands of businesses already growing with intelligent automation.</p>
            <div class="stats-grid">
                @foreach ($stats as $stat)
                    <div class="stat-card">
                        <p class="stat-value">{{ $stat['value'] }}</p>
                        <p class="stat-label">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section alt-bg">
        <div class="container">
            <h2>Brands Owned by Us</h2>
            <p class="section-subtitle">A family of products serving different automation and communication needs.</p>
            <div class="card-grid three-col">
                @foreach ($brands as $brand)
                    <article class="card">
                        <h3>{{ $brand['name'] }}</h3>
                        <p>{{ $brand['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section faq">
        <div class="container narrow">
            <h2>Frequently Asked Questions</h2>
            <details>
                <summary>How quickly can we get started?</summary>
                <p>Most teams can complete setup in under 30 minutes using guided onboarding and ready-made templates.</p>
            </details>
            <details>
                <summary>Can we use our existing CRM or tools?</summary>
                <p>Yes. The platform supports external integrations and custom workflows so your current stack continues to work.</p>
            </details>
            <details>
                <summary>Is this suitable for enterprise teams?</summary>
                <p>Absolutely. We support high-volume messaging, advanced permissions, audit visibility, and secure data handling.</p>
            </details>
        </div>
    </section>

    <section id="contact" class="section cta">
        <div class="container cta-grid">
            <div>
                <h2>Ready to Transform Business Communication?</h2>
                <p>
                    See how Com.bot can help your team automate conversations, respond faster,
                    and scale customer support without scaling overhead.
                </p>
                <ul class="check-list">
                    <li>Official WhatsApp Business API integration</li>
                    <li>Enterprise-grade security and reliability</li>
                    <li>Quick setup with guided onboarding</li>
                </ul>
            </div>
            <div class="cta-card">
                <h3>Book Your Demo</h3>
                <p>Get a personalized walkthrough tailored to your business goals.</p>
                <a class="btn btn-primary full" href="https://wa.me/918069871810?text=inquire" target="_blank" rel="noopener noreferrer">Send Message</a>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-wrapper">
        <p>&copy; {{ now()->year }} Com.bot. All rights reserved.</p>
        <div class="footer-links">
            <a href="#features">Features</a>
            <a href="#solutions">Solutions</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</footer>
</body>
</html>
