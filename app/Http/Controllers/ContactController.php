<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact-form');
    }

    public function submitContact(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Log::info('Contact form submitted', $validData);

        Session::flash('success', 'Form submitted successfully');
        Session::put('data', $validData);

        return redirect()->route('contact-confirm');
    }

    public function confirmContact()
    {
        if(!session()->has('data')) {
            return redirect()->route('contact-form');
        }

        return view('contact-confirm');
    }

}
