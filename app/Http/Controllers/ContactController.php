<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ContactController extends Controller
{
    //
    public function index()
    {
        $data = Contact::all();
        return Inertia::render('contacts/index', ['data' => $data]);
    }

    public function create()
    {
        return Inertia::render('contacts/create');
    }
    public function store(Request $request)
    {
        //validate first 

        $request->validate([
            'firstname' => 'required|min:5|max:30',
            'lastname' => 'required|min:5|max:30',
            'age' => 'required|integer',
            'gender' => 'string|max:15',
        ]);

        $userId = Auth::user()->id;

        $contact = Contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'gender' => $request->gender,
            'user_id' => $userId
        ]);

        return Redirect::route('contacts.index');
    }
    public function edit(Request $request)
    {
    }
    public function update(Request $request)
    {
    }
    public function delete(Request $request)
    {
    }
}
