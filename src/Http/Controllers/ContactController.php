<?php

namespace Bijen\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bijen\Contact\Mail\ContactMail;
use Bijen\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
       Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message, $request->name));

       Contact::create($request->all());

       return redirect()->route('contact');
    }
}
