<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.feedback', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);
        return redirect()->route('home');
    }
}
