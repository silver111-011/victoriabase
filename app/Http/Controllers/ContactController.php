<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'subject' => ['nullable', 'string', 'max:200'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // TODO: store in DB, send email notification
        // Example: ContactMessage::create($validated);
        // Example: Mail::to('hello@nileaxis.co.tz')->send(new ContactMail($validated));

        return redirect()->route('contact')
            ->with('success', 'Your message has been sent. We typically respond within one business day.');
    }
}
