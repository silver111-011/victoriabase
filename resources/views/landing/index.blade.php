{{-- resources/views/landing/index.blade.php --}}
@extends('layouts.app')


@section('title', 'Victoria base')
@section('meta_description', 'The complete microfinance management platform for East African MFIs, SACCOs, NGOs, and digital lenders.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush

@section('content')

{{-- ═══ NAV ═══ --}}
@include('components.nav')

{{-- ═══ HERO ═══ --}}
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>

    <div class="hero-badge">
        <span class="badge-dot"></span>
        Built for Africa's financial institutions
    </div>

    <h1>The complete platform for <em>microfinance excellence</em></h1>

    <p class="hero-sub">
        From client onboarding to regulatory reporting — Victoria base gives MFIs,
        SACCOs, NGOs, and digital lenders a single powerful system to manage every shilling.
    </p>

    <div class="hero-actions">
        <a href="{{ route('register') }}" class="btn-lg">
            Start free trial
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a href="{{ route('demo') }}" class="btn-lg-outline">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.4"/>
                <path d="M6 5.5l5 2.5-5 2.5V5.5z" fill="currentColor"/>
            </svg>
            Watch demo
        </a>
    </div>

    {{-- Stats bar --}}
    <div class="stats-bar">
        @foreach ($stats as $stat)
            <div class="stat-item">
                <span class="stat-number">{{ $stat['value'] }}</span>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- Dashboard mockup --}}
    <div class="hero-visual">
        <div class="dashboard-frame">
            <div class="db-topbar">
                <span class="db-dot r"></span>
                <span class="db-dot y"></span>
                <span class="db-dot g"></span>
                <span class="db-title">Victoria base — Amana Microfinance Ltd · Dashboard</span>
            </div>
            <div class="db-body">
                {{-- Sidebar --}}
                <div class="db-sidebar"V>
                    <div class="db-sidebar-logo">
                        <div class="db-sidebar-logo-name">Victoria <span>base</span></div>
                        <div class="db-sidebar-logo-sub">Amana Microfinance</div>
                    </div>
                    @foreach ($mockupNav as $item)
                        <div class="db-nav-item {{ $loop->first ? 'active' : '' }}">
                            {!! $item['icon'] !!}
                            {{ $item['label'] }}
                        </div>
                    @endforeach
                </div>

                {{-- Main content --}}
                <div class="db-main">
                    <div class="db-main-header">
                        <span class="db-page-title">Portfolio Overview</span>
                        <span class="db-badge-live">● Live</span>
                    </div>

                    <div class="db-cards">
                        @foreach ($mockupKpis as $kpi)
                            <div class="db-card">
                                <div class="db-card-label">{{ $kpi['label'] }}</div>
                                <div class="db-card-value">{{ $kpi['value'] }}</div>
                                <div class="db-card-delta {{ $kpi['trend'] }}">{{ $kpi['delta'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="db-chart-row">
                        <div class="db-chart-box">
                            <div class="db-chart-label">Disbursements — 6 months</div>
                            <div class="bars">
                                @foreach ([38, 52, 45, 70, 83, 100] as $height)
                                    <div class="bar" style="height:{{ $height }}%; background: {{ $loop->last ? 'var(--blue)' : ($height > 60 ? '#3b82f6' : ($height > 48 ? '#60a5fa' : '#bfdbfe')) }}"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="db-chart-box">
                            <div class="db-chart-label">Repayment trend</div>
                            <svg class="mini-line" viewBox="0 0 180 52" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="lg1" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgba(26,111,212,0.18)"/>
                                        <stop offset="100%" stop-color="rgba(26,111,212,0)"/>
                                    </linearGradient>
                                </defs>
                                <path d="M0 40 C20 36,40 44,60 30 S100 16,120 21 S160 10,180 4"
                                      fill="none" stroke="var(--blue)" stroke-width="1.8"/>
                                <path d="M0 40 C20 36,40 44,60 30 S100 16,120 21 S160 10,180 4 L180 52 L0 52Z"
                                      fill="url(#lg1)"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ ORG TYPES ═══ --}}
<section class="section-alt" id="solutions">
    <div style="padding:96px 5%">
        <div class="section-label">Built for every institution</div>
        <h2>One platform, <em>every organisation</em></h2>
        <p class="section-sub">
            Select your institution type at setup and the entire system — modules, terminology,
            chart of accounts, and compliance rules — configures itself automatically.
        </p>
        <div class="org-grid">
            @foreach ($orgTypes as $org)
                <div class="org-card">
                    <div class="org-icon">{{ $org['icon'] }}</div>
                    <div class="org-name">{{ $org['name'] }}</div>
                    <div class="org-desc">{{ $org['desc'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ FEATURES ═══ --}}
<section id="features">
    <div class="section-label">Core capabilities</div>
    <h2>Everything you need, <em>nothing you don't</em></h2>
    <p class="section-sub">
        Every feature was designed for the operational realities of East African
        financial institutions.
    </p>
    <div class="features-grid">
        @foreach ($features as $feat)
            <div class="feat-card">
                <div class="feat-icon-wrap">{{ $feat['icon'] }}</div>
                <div class="feat-title">{{ $feat['title'] }}</div>
                <div class="feat-desc">{{ $feat['desc'] }}</div>
            </div>
        @endforeach
    </div>
</section>

{{-- ═══ WIZARD PREVIEW ═══ --}}
<section class="section-alt">
    <div style="padding:96px 5%">
        <div class="wizard-split">

            {{-- Left: step list --}}
            <div>
                <div class="section-label">Setup experience</div>
                <h2>Live in <em>45 minutes</em>, configured for life</h2>
                <p class="section-sub" style="margin-bottom:28px">
                    Our guided wizard walks you through every configuration decision — from
                    legal identity to chart of accounts — before you can process a single transaction.
                </p>
                <div class="wizard-steps">
                    @foreach ($wizardSteps as $step)
                        <div class="wstep {{ $loop->first ? 'active' : '' }}">
                            <div class="wstep-num">{{ $loop->iteration }}</div>
                            <div>
                                <div class="wstep-title">{{ $step['title'] }}</div>
                                <div class="wstep-desc">{{ $step['desc'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: mockup form --}}
            <div class="wizard-mockup">
                <div class="wm-header">
                    <div class="wm-title">Institution Setup Wizard</div>
                    <div class="wm-step">Step 2 of 11</div>
                </div>
                <div class="wm-prog-track"><div class="wm-prog-fill"></div></div>
                <div class="wm-body">
                    <div class="wm-section-label">Legal Identity</div>
                    <div class="wm-field">
                        <div class="wm-label">Full legal name</div>
                        <div class="wm-input filled">Amana Microfinance Company Ltd</div>
                    </div>
                    <div class="wm-row">
                        <div class="wm-field">
                            <div class="wm-label">Registration no.</div>
                            <div class="wm-input filled">CO-2019-00847</div>
                        </div>
                        <div class="wm-field">
                            <div class="wm-label">TIN</div>
                            <div class="wm-input filled">109-456-823</div>
                        </div>
                    </div>
                    <div class="wm-field">
                        <div class="wm-label">Primary regulator</div>
                        <div class="wm-input filled">Bank of Tanzania (BoT)</div>
                    </div>
                    <div class="wm-field">
                        <div class="wm-label">Organisation type</div>
                        <div class="wm-org-grid">
                            <div class="wm-org-opt selected">🏦 MFI</div>
                            <div class="wm-org-opt">🤝 SACCO</div>
                            <div class="wm-org-opt">🌍 NGO</div>
                            <div class="wm-org-opt">📱 Fintech</div>
                        </div>
                    </div>
                    <div class="wm-footer">
                        <button class="wm-btn-back" type="button">← Back</button>
                        <button class="wm-btn-next" type="button">Continue →</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══ COMPLIANCE ═══ --}}
<section>
    <div class="section-label">Compliance built in</div>
    <h2>Regulated by BoT? <em>We've got you.</em></h2>
    <p class="section-sub">Every compliance requirement is a first-class feature — not an afterthought add-on.</p>
    <div class="compliance-grid">
        @foreach ($complianceFeatures as $item)
            <div class="comp-card">
                <div class="comp-icon">{{ $item['icon'] }}</div>
                <div class="comp-title">{{ $item['title'] }}</div>
                <div class="comp-desc">{{ $item['desc'] }}</div>
                <div class="comp-badge {{ $item['badge_class'] }}">{{ $item['badge_text'] }}</div>
            </div>
        @endforeach
    </div>
</section>

{{-- ═══ PRICING ═══ --}}
<section class="section-alt" id="pricing">
    <div style="padding:96px 5%">
        <div class="section-label" style="text-align:center">Simple pricing</div>
        <h2 style="text-align:center;margin-bottom:10px">The right plan for <em>every stage</em></h2>
        <p class="section-sub" style="text-align:center;margin:0 auto 50px">
            No surprise price hikes. Every plan includes the full setup wizard and all compliance tools.
        </p>
        <div class="pricing-grid">
            @foreach ($plans as $plan)
                <div class="price-card {{ $plan['featured'] ? 'featured' : '' }}">
                    @if ($plan['featured'])
                        <div class="price-featured-tag">Most popular</div>
                    @endif

                    <div class="price-plan" @if($plan['featured']) style="margin-top:10px" @endif>
                        {{ $plan['name'] }}
                    </div>
                    <div class="price-desc">{{ $plan['desc'] }}</div>

                    <div class="price-amount">
                        @if ($plan['custom'])
                            <span class="price-num" style="font-size:28px">Custom</span>
                            <div class="price-per">contact our team</div>
                        @else
                            <span class="price-curr">TZS </span>
                            <span class="price-num">{{ $plan['price'] }}</span>
                            <div class="price-per">per organisation / month</div>
                        @endif
                    </div>

                    <ul class="price-features">
                        @foreach ($plan['features'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>

                    <a href="{{ $plan['featured'] ? route('register') : route('contact') }}"
                       class="price-cta {{ $plan['featured'] ? 'blue' : 'outline' }}">
                        {{ $plan['cta'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ TESTIMONIALS ═══ --}}
<section>
    <div class="section-label" style="text-align:center">What our clients say</div>
    <h2 style="text-align:center;margin-bottom:44px">
        Trusted by institutions <em>across East Africa</em>
    </h2>
    <div class="testi-grid">
        @foreach ($testimonials as $testi)
            <div class="testi-card">
                <div class="testi-quote">"</div>
                <div class="testi-text">{{ $testi['quote'] }}</div>
                <div class="testi-author">
                    <div class="testi-avatar">{{ $testi['initials'] }}</div>
                    <div>
                        <div class="testi-name">{{ $testi['name'] }}</div>
                        <div class="testi-role">{{ $testi['role'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- ═══ FINAL CTA ═══ --}}
<section class="cta-section">
    <div class="section-label">Ready to start?</div>
    <h2>Start your <em style="color:#bfdbfe;font-style:normal">free 14-day trial</em> today</h2>
    <p>No credit card required. Full access to all features. Our team will guide you through setup.</p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
        <a href="{{ route('register') }}" class="btn-white">Start free trial</a>
        <a href="{{ route('demo') }}" class="btn-white-outline">Request a demo</a>
    </div>
</section>

{{-- ═══ FOOTER ═══ --}}
@include('components.footer')

@push('scripts')
<script src="{{ asset('js/landing.js') }}"></script>
@endpush

@endsection
