<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:50',
            'website' => 'nullable|url',
            'description' => 'required|string',
        ]);

        ContactMessage::create([
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'] ?? null,
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'website' => $data['website'] ?? null,
            'description' => $data['description'],
        ]);

        return response()->json(['ok' => true]);
    }
}