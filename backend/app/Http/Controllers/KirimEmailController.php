<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index()
    {
        return view('formemail');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'emails' => 'required|array|min:1|max:10',
            'emails.*' => 'required|email',
            'html_content' => 'required|string',
        ]);

        foreach ($request->emails as $email) {
            Mail::send('mailtemplate', ['konten' => $request->html_content], function ($message) use ($email) {
                $message->to($email)
                    ->subject('Test Blasting Email Template Holingky');
            });
        }

        return view('responkirim')->with('sukses', 'Email HTML berhasil dikirim!');
    }
}
