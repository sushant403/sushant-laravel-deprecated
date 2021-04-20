<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contents.contact.index', compact('contacts'));
    }

    public function create(Contact $contact)
    {
        return view('admin.contents.contact.create', compact('contact'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('sushant.contact.index')->with('success', 'New Contact Added Successfully');;
    }

    public function edit(Contact $contact)
    {
        return view('admin.contents.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->back()->with('success', 'Contact Information Updated Successfully');
    }

    public function show(Contact $contact)
    {
        return view('admin.contents.contact.show', compact('contact', 'about'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back()->with('success', 'Contact Deleted Successfully');;
    }
}
