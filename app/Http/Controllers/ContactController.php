<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){
        //Validate Contact
        $request->validate([
            'name'    => 'required|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|max:11',
            'subject' => 'required|max:255',
            'message' => 'required|max:1020',
        ]);

        //Store Contact
        $contact             = new Contact;
        $contact->name       = $request->name;
        $contact->email      = $request->email;
        $contact->subject    = $request->subject;
        $contact->message    = $request->message;
        $contact->updated_at = null;
        $contact->save();

        return redirect()->route('contact')->with("successful_contact", "Your form was submitted successfully.");
    }
}
