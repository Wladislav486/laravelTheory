<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if($request->method() == 'POST'){
            $body = "<p><b>Имя:</b> " . $request->input('name') . "</p>";
            $body .= "<p><b>Почта:</b>" . $request->input('email') . "</p>";
            $body .= "<p><b>Сообщение:</b><br>" . nl2br($request->input('text')) . "</p>";
            Mail::to('wlad4206@gmail.com')->send(new TestMail($body));
            $request->session()->flash('success', 'Сообщение отправлено.');
            return redirect('/send');
        }
        return view('mail.send');
    }
}
