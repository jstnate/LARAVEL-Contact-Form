<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailShipping;

class MailController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('message');

        $user = ['name' => $name, 'email' => $email, "content" => $content];

        Mail::to('YOUR_EMAIL_ADDRESS')
            ->send(new MailShipping($user));

        return view('result');
    }
}
