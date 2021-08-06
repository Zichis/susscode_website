<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs as MailContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required|max:200'
        ]);

        Mail::to('contact-us@susscode.com')->send(new MailContactUs(
            $request->email,
            $request->name,
            $request->message)
        );

        return redirect('/');
    }
}
