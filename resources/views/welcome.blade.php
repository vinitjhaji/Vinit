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
    <link rel="icon" type="image/svg+xml" href="/images/combot-icon.svg">
    @if (file_exists(public_path('build/manifest.json')))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssAsset = $manifest['resources/css/app.css']['file'] ?? null;
            $jsAsset = $manifest['resources/js/app.js']['file'] ?? null;
        @endphp
        @if ($cssAsset)
            <link rel="stylesheet" href="{{ '/build/' . ltrim($cssAsset, '/') }}">
        @endif
        @if ($jsAsset)
            <script type="module" src="{{ '/build/' . ltrim($jsAsset, '/') }}"></script>
        @endif
    @elseif (file_exists(public_path('hot')))
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
        ['title' => 'WhatsApp Business API', 'description' => 'Official Meta Business Partner integration with direct API access'],
        ['title' => 'Unified Team Inbox', 'description' => 'Centralized communication hub for seamless team collaboration'],
        ['title' => 'Visual Bot Builder', 'description' => 'Create intelligent chatbots with our drag-and-drop interface'],
        ['title' => 'Native Payments', 'description' => 'Integrated payment processing for WhatsApp transactions'],
        ['title' => 'Multi-Channel Support', 'description' => 'Manage WhatsApp, Facebook & Instagram from one platform'],
        ['title' => 'Automation Builder', 'description' => 'Create custom workflows with 1000+ integrations'],
    ];

    $solutions = [
        'Bulk Messaging',
        'Order Updates',
        'Customer Support',
        'Smart Chatbots',
        'Notifications',
        'Payment Collection',
        'External Integration',
        'Team Collaboration',
    ];

    $stats = [
        ['value' => '23,000+', 'label' => 'Active Customers'],
        ['value' => '100+', 'label' => 'Government Bodies'],
        ['value' => '500+', 'label' => 'Global Partners'],
        ['value' => '50+', 'label' => 'Countries Served'],
        ['value' => '25M+', 'label' => 'Messages/Day', 'note' => 'Processed through our platform'],
        ['value' => '100K+', 'label' => 'Bots Created', 'note' => 'Automating customer interactions'],
    ];

    $brands = [
        [
            'name' => '11 Automations',
            'description' => 'Enterprise-grade automation solutions designed to scale your business operations with advanced workflow capabilities and intelligent process optimization.',
        ],
        [
            'name' => 'Automations Builder',
            'description' => 'Powerful no-code automation platform that empowers teams to create custom workflows, integrate systems, and automate complex business processes effortlessly.',
        ],
        [
            'name' => '1 Automations',
            'description' => 'Streamlined automation suite focused on delivering simple, effective solutions for small businesses to automate their essential day-to-day operations.',
        ],
    ];
@endphp

<header class="site-header">
    <div class="container nav-wrapper">
        <a href="#" class="brand">
            <img class="brand-icon" src="/images/combot-icon.svg" alt="Com.bot icon">
            <span class="brand-text">
                <strong>COM.BOT</strong>
                <small>AUTOMATING GROWTH</small>
            </span>
        </a>
        <nav class="main-nav">
            <a href="#">Home</a>
            <a href="#features">Features</a>
            <a href="#solutions">Use Cases</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
            <a href="#affiliate">Affiliate</a>
        </nav>
        <a class="nav-cta" href="https://v3.com.bot/register" target="_blank" rel="noopener noreferrer">Get Started</a>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <div class="partner-badge">
                    <div class="meta-mark">∞ Meta</div>
                    <div>
                        <strong>Official Partner</strong>
                        <p>Meta Business Solution</p>
                    </div>
                </div>
                <h1>AI Unified Business Communication Platform</h1>
                <p class="hero-text">
                    Connect with customers across all channels through a single, powerful platform.
                    Automate conversations, boost sales, and deliver exceptional support.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="https://wa.me/918069871810?text=inquire" target="_blank" rel="noopener noreferrer">Schedule A Call</a>
                    <a class="btn btn-secondary" href="https://v3.com.bot/register" target="_blank" rel="noopener noreferrer">Get Started</a>
                </div>
                <div class="channel-grid">
                    <article class="channel-card">
                        <span>💬</span>
                        <p>WhatsApp Business</p>
                    </article>
                    <article class="channel-card">
                        <span>🗨️</span>
                        <p>Facebook Messenger</p>
                    </article>
                    <article class="channel-card">
                        <span>📸</span>
                        <p>Instagram DM</p>
                    </article>
                    <article class="channel-card">
                        <span>🌐</span>
                        <p>Web Widget</p>
                    </article>
                </div>
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
                        @if (!empty($stat['note']))
                            <p class="stat-note">{{ $stat['note'] }}</p>
                        @endif
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

    <section id="pricing" class="section alt-bg">
        <div class="container">
            <h2>Flexible Pricing</h2>
            <p class="section-subtitle">Plans for startups, growth teams, and enterprise organizations.</p>
            <div class="card-grid three-col">
                <article class="card">
                    <h3>Starter</h3>
                    <p>Perfect for small teams launching their first WhatsApp automation flows.</p>
                </article>
                <article class="card">
                    <h3>Growth</h3>
                    <p>Built for scaling teams that need advanced automation, campaigns, and analytics.</p>
                </article>
                <article class="card">
                    <h3>Enterprise</h3>
                    <p>Custom volume, dedicated support, advanced governance, and secure integrations.</p>
                </article>
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
                    <li>Official Meta Partner with WhatsApp Business API</li>
                    <li>Enterprise security with strong data protection</li>
                    <li>Quick setup and integration in minutes</li>
                </ul>
            </div>
            <div class="cta-card">
                <img class="cta-visual" src="/images/hero-automation.svg" alt="Automation workflow preview">
                <h3>Get Started Today</h3>
                <p>See how Com.bot can help your business grow with a personalized demo.</p>
                <a class="btn btn-primary full" href="https://wa.me/918069871810?text=inquire" target="_blank" rel="noopener noreferrer">Send Message</a>
            </div>
        </div>
    </section>

    <section id="affiliate" class="section">
        <div class="container narrow">
            <h2>Affiliate Program</h2>
            <p class="section-subtitle">Partner with us and grow with attractive referral rewards for every successful business onboarding.</p>
            <div class="affiliate-box">
                <p>Become an affiliate and help businesses adopt intelligent communication automation with Com.bot.</p>
                <a class="btn btn-secondary" href="https://v3.com.bot/register" target="_blank" rel="noopener noreferrer">Join Affiliate Network</a>
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
