{{-- resources/views/pages/demo.blade.php --}}
@extends('layouts.app')

@section('title', 'Request a Demo — Nile Axis')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endpush

@section('content')
@include('components.nav')

<div style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:120px 5% 80px;background:var(--blue-xpale, #f7faff);text-align:center;">

    <div style="background:#fff;border:1px solid #dbeafe;border-radius:16px;padding:48px;max-width:520px;width:100%;box-shadow:0 4px 20px rgba(26,111,212,0.12);">

        <div style="font-size:40px;margin-bottom:16px;">🎬</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:28px;color:#1e293b;margin-bottom:10px;">Request a Demo</h2>
        <p style="font-size:15px;color:#64748b;line-height:1.7;margin-bottom:28px;">
            See Nile Axis in action. One of our team will walk you through the full system — setup wizard, loan management, compliance tools, and reporting.
        </p>

        <form method="POST" action="{{ route('demo.submit') }}" style="text-align:left;">
            @csrf

            <div style="margin-bottom:14px;">
                <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Full name</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                    style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;outline:none;"
                    placeholder="e.g. Fatma Hassan">
            </div>

            <div style="margin-bottom:14px;">
                <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Work email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                    style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;outline:none;"
                    placeholder="you@institution.co.tz">
            </div>

            <div style="margin-bottom:14px;">
                <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Organisation type</label>
                <select name="org_type" style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;outline:none;background:#fff;">
                    <option value="">Select type...</option>
                    <option>Microfinance Institution (MFI)</option>
                    <option>SACCO</option>
                    <option>NGO / Foundation</option>
                    <option>Fintech / Digital Lender</option>
                    <option>Other</option>
                </select>
            </div>

            <div style="margin-bottom:24px;">
                <label style="font-size:11px;letter-spacing:.06em;text-transform:uppercase;color:#64748b;font-weight:600;display:block;margin-bottom:5px;">Phone number</label>
                <input type="tel" name="phone" value="{{ old('phone') }}"
                    style="width:100%;padding:10px 14px;border:1px solid #dbeafe;border-radius:8px;font-size:14px;color:#334155;outline:none;"
                    placeholder="+255 ...">
            </div>

            <button type="submit"
                style="width:100%;padding:13px;background:#1a6fd4;color:#fff;border:none;border-radius:8px;font-size:15px;font-weight:600;cursor:pointer;">
                Book my demo →
            </button>
        </form>
    </div>
</div>

@include('components.footer')
@endsection
