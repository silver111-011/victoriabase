{{-- resources/views/pages/contact.blade.php --}}
@extends('layouts.app')
@section('title', 'Contact Us — Nile Axis')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endpush

@section('content')
@include('components.nav')

<div style="min-height:100vh;padding:120px 5% 80px;background:var(--blue-xpale,#f7faff);">
    <div style="max-width:600px;margin:0 auto;">

        <div style="font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#1a6fd4;font-weight:600;margin-bottom:12px;">Get in touch</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:36px;color:#1e293b;margin-bottom:12px;">We'd love to <em style="color:#1a6fd4;font-style:normal;">hear from you</em></h2>
        <p style="font-size:16px;color:#64748b;margin-bottom:40px;line-height:1.7;">Questions about pricing, implementation, or how Nile Axis fits your institution? Our team typically responds within one business day.</p>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:36px;">
            <div style="background:#fff;border:1px solid #dbeafe;border-radius:12px;padding:20px;">
                <div style="font-size:22px;margin-bottom:8px;">📧</div>
                <div style="font-size:13px;font-weight:600;color:#1e293b;margin-bottom:4px;">Email us</div>
                <div style="font-size:13px;color:#64748b;">hello@nileaxis.co.tz</div>
            </div>
            <div style="background:#fff;border:1px solid #dbeafe;border-radius:12px;padding:20px;">
                <div style="font-size:22px;margin-bottom:8px;">📞</div>
                <div style="font-size:13px;font-weight:600;color:#1e293b;margin-bottom:4px;">Call us</div>
                <div style="font-size:13px;color:#64748b;">+255 22 000 0000</div>
            </div>
        </div>

        <div style="background:#fff;border:1px solid #dbeafe;border-radius:16px;padding:36px;box-shadow:0 4px 20px rgba(26,111,212,0.08);">
            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:14px;">
                    <div>
                        <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Full name</label>
                        <input type="text" name="name" required style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;" placeholder="Your name">
                    </div>
                    <div>
                        <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Email</label>
                        <input type="email" name="email" required style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;" placeholder="you@org.co.tz">
                    </div>
                </div>
                <div style="margin-bottom:14px;">
                    <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Subject</label>
                    <input type="text" name="subject" style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;" placeholder="How can we help?">
                </div>
                <div style="margin-bottom:24px;">
                    <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Message</label>
                    <textarea name="message" rows="5" style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;resize:vertical;" placeholder="Tell us about your institution and what you need..."></textarea>
                </div>
                <button type="submit" style="width:100%;padding:13px;background:#1a6fd4;color:#fff;border:none;border-radius:8px;font-size:15px;font-weight:600;cursor:pointer;">Send message →</button>
            </form>
        </div>
    </div>
</div>

@include('components.footer')
@endsection
