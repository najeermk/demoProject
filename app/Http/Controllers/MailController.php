<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactsMail;

class MailController extends Controller
{

    public function contact() {
        return view('emails.contact');
    }

    public function sendMail(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'comment' => 'required',
        ]);

        Mail::to("1234nmk96@gmail.com")->send(new ContactsMail($formFields));
    }
}
