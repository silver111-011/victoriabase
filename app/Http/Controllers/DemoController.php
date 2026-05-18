<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:100'],
            'email'    => ['required', 'email', 'max:150'],
            'org_type' => ['nullable', 'string', 'max:100'],
            'phone'    => ['nullable', 'string', 'max:30'],
        ]);

        // TODO: store in DB, send email notification, integrate with CRM
        // Example: DemoRequest::create($validated);
        // Example: Mail::to('sales@nileaxis.co.tz')->send(new DemoRequestMail($validated));

        return redirect()->route('demo')
            ->with('success', 'Thank you! We will be in touch within one business day to schedule your demo.');
    }
}
