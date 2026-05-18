{{-- resources/views/components/footer.blade.php --}}
<footer>
    <div class="footer-grid">
        <div>
            <div class="footer-brand-name">Nile <span>Axis</span></div>
            <div class="footer-brand-desc">
                A complete microfinance management platform built for the
                operational realities of East African financial institutions.
            </div>
            <div class="footer-social">
                <a class="social-btn" href="#" aria-label="Twitter">𝕏</a>
                <a class="social-btn" href="#" aria-label="LinkedIn">in</a>
                <a class="social-btn" href="#" aria-label="YouTube">▶</a>
            </div>
        </div>

        <div>
            <div class="footer-col-title">Product</div>
            <ul class="footer-links">
                <li><a href="{{ url('/#features') }}">Features</a></li>
                <li><a href="{{ url('/#pricing') }}">Pricing</a></li>
                <li><a href="{{ route('integrations') }}">Integrations</a></li>
                <li><a href="{{ route('changelog') }}">What's new</a></li>
                <li><a href="{{ route('roadmap') }}">Roadmap</a></li>
            </ul>
        </div>

        <div>
            <div class="footer-col-title">Solutions</div>
            <ul class="footer-links">
                <li><a href="{{ route('solutions.mfi') }}">MFIs</a></li>
                <li><a href="{{ route('solutions.sacco') }}">SACCOs</a></li>
                <li><a href="{{ route('solutions.ngo') }}">NGOs</a></li>
                <li><a href="{{ route('solutions.fintech') }}">Digital lenders</a></li>
                <li><a href="{{ route('solutions.sme') }}">SMEs</a></li>
            </ul>
        </div>

        <div>
            <div class="footer-col-title">Support</div>
            <ul class="footer-links">
                <li><a href="{{ route('docs') }}">Documentation</a></li>
                <li><a href="{{ route('help') }}">Help centre</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li><a href="{{ route('status') }}">Status page</a></li>
                <li><a href="{{ route('community') }}">Community</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-copy">
            &copy; {{ date('Y') }} Nile Axis. All rights reserved.
            Built with Laravel &amp; MySQL.
        </div>
        <div class="footer-legal">
            <a href="{{ route('privacy') }}">Privacy policy</a>
            <a href="{{ route('terms') }}">Terms of service</a>
            <a href="{{ route('dpa') }}">Data processing</a>
        </div>
    </div>
</footer>
