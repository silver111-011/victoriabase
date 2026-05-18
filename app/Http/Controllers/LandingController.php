<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.index', [
            'stats'              => $this->stats(),
            'mockupNav'          => $this->mockupNav(),
            'mockupKpis'         => $this->mockupKpis(),
            'orgTypes'           => $this->orgTypes(),
            'features'           => $this->features(),
            'wizardSteps'        => $this->wizardSteps(),
            'complianceFeatures' => $this->complianceFeatures(),
            'plans'              => $this->plans(),
            'testimonials'       => $this->testimonials(),
        ]);
    }

    // ─── Hero stats ───────────────────────────────────────────────────────────

    private function stats(): array
    {
        return [
            ['value' => '10+',   'label' => 'Organisation types'],
            ['value' => '19',    'label' => 'Integrated modules'],
            ['value' => '100%',  'label' => 'BoT compliant'],
            ['value' => 'EN/SW', 'label' => 'Bilingual support'],
        ];
    }

    // ─── Dashboard mockup sidebar nav ─────────────────────────────────────────

    private function mockupNav(): array
    {
        $icon = fn(string $svg) => $svg;

        return [
            ['label' => 'Dashboard',  'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/></svg>'],
            ['label' => 'Clients',    'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.3"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>'],
            ['label' => 'Loans',      'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 13V7l6-5 6 5v6a1 1 0 01-1 1H3a1 1 0 01-1-1z" stroke="currentColor" stroke-width="1.3"/><path d="M6 14v-4h4v4" stroke="currentColor" stroke-width="1.3"/></svg>'],
            ['label' => 'Reports',    'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 10V6m4-3v7m4-5v5m2 2H2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>'],
            ['label' => 'Savings',    'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="4" width="12" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M5 4V3a1 1 0 011-1h4a1 1 0 011 1v1" stroke="currentColor" stroke-width="1.3"/></svg>'],
            ['label' => 'Compliance', 'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.3"/><path d="M2 14a6 6 0 0112 0" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>'],
        ];
    }

    // ─── Dashboard KPI cards ──────────────────────────────────────────────────

    private function mockupKpis(): array
    {
        return [
            ['label' => 'Loan Portfolio',  'value' => 'TZS 4.2B', 'delta' => '▲ 12.4% vs last month', 'trend' => 'up'],
            ['label' => 'PAR > 30 Days',   'value' => '2.8%',     'delta' => '▼ 0.4% improvement',    'trend' => 'dn'],
            ['label' => 'Active Clients',  'value' => '8,642',    'delta' => '▲ 347 this month',       'trend' => 'up'],
        ];
    }

    // ─── Organisation types ───────────────────────────────────────────────────

    private function orgTypes(): array
    {
        return [
            ['icon' => '🏦', 'name' => 'Microfinance Institution', 'desc' => 'Group lending, PAR tracking, teller cash, regulatory returns'],
            ['icon' => '🤝', 'name' => 'SACCO',                    'desc' => 'Member shares, dividends, cooperative governance, AGM reports'],
            ['icon' => '🌍', 'name' => 'NGO / Foundation',         'desc' => 'Grant management, fund accounting, donor reporting, outcomes'],
            ['icon' => '📱', 'name' => 'Fintech / Digital Lender', 'desc' => 'e-KYC, credit scoring, API gateway, mobile money, instant decisions'],
            ['icon' => '🏭', 'name' => 'Manufacturing',            'desc' => 'BOM, production orders, WIP, COGS, finished goods tracking'],
            ['icon' => '🛒', 'name' => 'Retail / Wholesale',       'desc' => 'POS, stock transfers, purchase orders, margin analysis'],
            ['icon' => '🎓', 'name' => 'Educational Institution',  'desc' => 'Student registration, fee structures, timetable, academic reports'],
            ['icon' => '🏥', 'name' => 'Healthcare Facility',      'desc' => 'Patient records, pharmacy, inpatient billing, NHIF integration'],
            ['icon' => '⛪', 'name' => 'Faith-Based Organisation', 'desc' => 'Membership, tithe/offering tracking, outreach fund accounting'],
            ['icon' => '💼', 'name' => 'General SME',              'desc' => 'AR/AP, invoicing, expense tracking, payroll, general ledger'],
        ];
    }

    // ─── Feature cards ────────────────────────────────────────────────────────

    private function features(): array
    {
        return [
            ['icon' => '🧙', 'title' => 'Guided Setup Wizard',         'desc' => 'A structured, unskippable wizard that configures your entire system — chart of accounts, posting rules, org hierarchy, compliance — before you serve a single client.'],
            ['icon' => '📊', 'title' => 'Regulatory Chart of Accounts','desc' => 'Pre-built COA templates aligned with BoT requirements for MFIs, cooperative regulations for SACCOs, and IFRS standards — seeded automatically at setup.'],
            ['icon' => '🔒', 'title' => 'AML & KYC Compliance',        'desc' => 'Integrated NIDA e-KYC verification, automated AML screening against sanctions lists, configurable KYC refresh policies by client risk category.'],
            ['icon' => '💰', 'title' => 'Smart Accounting Engine',     'desc' => 'Posting rules configured once at institution level cascade to every product. Every disbursement, repayment, and deposit posts correctly — automatically.'],
            ['icon' => '📅', 'title' => 'Automatic Period Generation', 'desc' => "Define your financial year once. The system generates five years of accounting periods instantly, aligned with your regulator's reporting calendar."],
            ['icon' => '🌐', 'title' => 'Swahili & English',           'desc' => 'Full translation architecture from day one. Head office staff operate in English; field officers in rural areas switch to Swahili. Same data, both languages.'],
            ['icon' => '🏢', 'title' => 'Multi-Branch Hierarchy',      'desc' => "Build your org structure from head office down to service points. Each unit gets its own cost centre for branch-level P&L and balance sheet reporting."],
            ['icon' => '🔐', 'title' => 'Dual-Control Workflow',       'desc' => 'Any change to core institution settings requires a separate approver. No self-approval. Every change is permanently logged in an immutable audit trail.'],
            ['icon' => '📈', 'title' => 'Rate Cap Enforcement',        'desc' => "Configure your regulator's maximum lending rate. The system calculates total cost of credit on every product and refuses to save any product exceeding the cap."],
        ];
    }

    // ─── Wizard steps ─────────────────────────────────────────────────────────

    private function wizardSteps(): array
    {
        return [
            ['title' => 'Organisation type & legal identity', 'desc' => 'Select your institution type — this reshapes the entire system.'],
            ['title' => 'Financial foundation',               'desc' => 'Currency, financial year, 5 years of periods generated automatically.'],
            ['title' => 'Chart of accounts',                  'desc' => 'Regulatory COA pre-loaded and ready to customise.'],
            ['title' => 'Compliance & KYC',                   'desc' => 'AML screening, credit bureau, rate caps — all configured here.'],
            ['title' => 'Review & go live',                   'desc' => 'Dual confirmation, password re-entry, then everything seeded instantly.'],
        ];
    }

    // ─── Compliance features ─────────────────────────────────────────────────

    private function complianceFeatures(): array
    {
        return [
            ['icon' => '🪪', 'title' => 'NIDA e-KYC Integration',        'desc' => "Verify clients instantly against Tanzania's National Identification Authority database. Every check logged permanently.",                                       'badge_class' => 'active', 'badge_text' => '● Active'],
            ['icon' => '🛡️', 'title' => 'AML / CTF Screening',           'desc' => 'Live screening against World-Check, FIU watchlists, and Dow Jones. Automatic block on match with compliance officer review workflow.',                         'badge_class' => 'active', 'badge_text' => '● Active'],
            ['icon' => '📋', 'title' => 'Credit Bureau Reporting',        'desc' => 'CreditInfo Tanzania and D&B Tanzania integration. Automated monthly extraction and submission — mandatory for BoT-regulated lenders.',                         'badge_class' => 'active', 'badge_text' => '● Active'],
            ['icon' => '⚖️', 'title' => 'Interest Rate Cap Enforcement',  'desc' => 'Configure the regulatory maximum. The system calculates full APR on every product including all fees and blocks products that exceed the cap.',              'badge_class' => 'warn',   'badge_text' => '⚠ Enforced'],
            ['icon' => '📄', 'title' => 'Licence Expiry Alerts',          'desc' => '90/60/30/14/7-day automated alerts to compliance officers. A permanent red banner appears on all screens the moment a licence expires.',                     'badge_class' => 'active', 'badge_text' => '● Monitoring'],
            ['icon' => '🔁', 'title' => 'KYC Refresh Tracking',           'desc' => 'Configurable refresh intervals by client risk category — standard, high-risk (PEPs), and low-risk. Automatic expiry alerts generated per client.',           'badge_class' => 'active', 'badge_text' => '● Active'],
        ];
    }

    // ─── Pricing plans ────────────────────────────────────────────────────────

    private function plans(): array
    {
        return [
            [
                'name'     => 'Starter',
                'desc'     => 'For small SACCOs and community MFIs just getting started.',
                'price'    => '180K',
                'custom'   => false,
                'featured' => false,
                'cta'      => 'Get started',
                'features' => [
                    'Up to 500 active clients',
                    '2 branch units',
                    'Core loan & savings modules',
                    'Basic compliance tools',
                    'English interface',
                ],
            ],
            [
                'name'     => 'Growth',
                'desc'     => 'For regulated MFIs and SACCOs ready to scale.',
                'price'    => '480K',
                'custom'   => false,
                'featured' => true,
                'cta'      => 'Start free trial',
                'features' => [
                    'Up to 5,000 active clients',
                    '10 branch units',
                    'Full AML & e-KYC integration',
                    'Credit bureau reporting',
                    'English + Swahili',
                    'Multi-currency support',
                ],
            ],
            [
                'name'     => 'Enterprise',
                'desc'     => 'For large MFIs, national SACCOs, and multi-entity groups.',
                'price'    => null,
                'custom'   => true,
                'featured' => false,
                'cta'      => 'Contact sales',
                'features' => [
                    'Unlimited clients & branches',
                    'Multi-entity architecture',
                    'Consolidated reporting',
                    'Dedicated implementation',
                    'SLA-backed support',
                    'On-premise option',
                ],
            ],
        ];
    }

    // ─── Testimonials ─────────────────────────────────────────────────────────

    private function testimonials(): array
    {
        return [
            [
                'quote'    => 'The setup wizard alone saved us three months of implementation time. Our chart of accounts was pre-loaded for BoT compliance — we just reviewed and confirmed.',
                'initials' => 'MK',
                'name'     => 'Mama Khadija',
                'role'     => 'CEO, Tumaini Microfinance, Dodoma',
            ],
            [
                'quote'    => 'Our field officers are not accountants. With Nile Axis in Swahili, they handle client registration and loan disbursements flawlessly from their tablets in the field.',
                'initials' => 'JM',
                'name'     => 'James Mwaura',
                'role'     => 'Operations Director, Umoja SACCO, Arusha',
            ],
            [
                'quote'    => "The AML screening and KYC refresh tracking means we've never had a compliance breach since going live. Our BoT auditors were genuinely impressed with the audit trail.",
                'initials' => 'FN',
                'name'     => 'Fatma Nguyen',
                'role'     => 'Compliance Manager, Baobab Finance, Dar es Salaam',
            ],
        ];
    }
}
