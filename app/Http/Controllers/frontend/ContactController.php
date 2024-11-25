<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'number' => 'nullable|string|max:20',
        ]);

        // Insert data into the database
        $inserted = DB::table('newsletters')->insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'number' => $validated['number'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Check if the data was inserted successfully
        if ($inserted) {
            session()->flash('success', 'Your message has been sent successfully.');
        } else {
            session()->flash('error', 'Some problem occurred.');
        }

        // Redirect back to the contact page
        return redirect()->route('/');
    }
}