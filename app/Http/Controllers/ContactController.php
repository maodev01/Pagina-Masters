<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'event_date' => 'required|date',
            'message' => 'required|string',
        ]);

        // In a real app, we would send an email or save to DB here.
        // For now, just redirect back with a success message.

        return back()->with('success', '¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.');
    }
}
