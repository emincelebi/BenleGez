<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();

        return view('admin.table', compact('contacts'));
    }


    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact=Contact::create($validatedData);

        if ($contact) {
            return redirect('/contact')->with('success', 'Contact created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create contact.');
        }

        return redirect('/contact')->with('success', 'Contact created successfully.');
    }

    public function getContactForm()
    {
        $user = Auth::user();

        return view('contact', [
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

}
