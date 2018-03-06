<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create() {
        return view('layouts.contact');
    }

    public function send(ContactFormRequest $request) 
    {
        
        Mail::to('datkins05@yahoo.com')
            ->send(new ContactEmail($request->only(['email', 'subject', 'message'])));
        
        Mail::to('BigJman1234567@yahoo.com')
            ->send(new ContactEmail($request->only(['email', 'subject', 'message'])));

        flash('Your message has been sent!')->success();

        return redirect()->route('contact.create');

    }
}
