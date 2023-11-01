<?php declare(strict_types=1);


namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function sendMail(SendMailRequest $request)
    {
        Mail::to('t.warezak@gmail.com')
            ->send(new MailContact($request->validated()));

        return back()->with('success', 'Dziękujemy za wysłanie wiadomości');

    }

    public function contact()
    {

        return view('contact');
    }

}
