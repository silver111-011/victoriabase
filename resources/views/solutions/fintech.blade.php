{{-- resources/views/solutions/fintech.blade.php --}}
@extends('layouts.app')
@section('title', 'Fintech and Digital Lenders — Nile Axis')
@push('styles')<link rel="stylesheet" href="{{ asset('css/landing.css') }}">@endpush
@section('content')
@include('components.nav')
<div style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:120px 5% 80px;background:#f7faff;text-align:center;">
    <div style="max-width:560px;">
        <div style="font-size:52px;margin-bottom:20px;">📱</div>
        <div style="font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#1a6fd4;font-weight:600;margin-bottom:12px;">Nile Axis</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:36px;color:#1e293b;margin-bottom:14px;">Fintech and Digital Lenders</h2>
        <p style="font-size:16px;color:#64748b;line-height:1.75;margin-bottom:36px;">API-first lending infrastructure for digital lenders.</p>
        <div style="display:inline-flex;gap:12px;flex-wrap:wrap;justify-content:center;">
            <a href="{{ route('home') }}" style="padding:12px 26px;background:#1a6fd4;color:#fff;border-radius:8px;font-size:14px;font-weight:600;text-decoration:none;">Back to home</a>
            <a href="{{ route('contact') }}" style="padding:12px 26px;background:#fff;color:#1a6fd4;border:1px solid #bfdbfe;border-radius:8px;font-size:14px;font-weight:500;text-decoration:none;">Contact us</a>
        </div>
        <p style="font-size:13px;color:#94a3b8;margin-top:32px;">Full content coming soon.</p>
    </div>
</div>
@include('components.footer')
@endsection
