<?php

namespace App\Http\Controllers;

use App\Mail\VisaMail;
use App\Models\MailMessages;
use App\Models\User;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Mail\MailManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendInitialEmail(Request $req)
    {
        $recieverData = User::find($req->id);
        $recieverEmail = $recieverData->email;
        $senderEmail = Auth::user()->email;
        $message = '<h1 class="h1">Welcome to RS4IT</h1>
                    <p>We are sending this email to you to complete your Saudi VISA entry and travel requirement</p>
                    <br>
                    <p>Please click on link below</p>
                    <a href="/firstPage">123456789qwererewr.com</a>
        ';
        MailMessages::create([
            "senderEmail" => $senderEmail,
            "recieverEmail" => $recieverEmail,
            "messages" => $message
        ]);
        return redirect()->back()->with("Done");
    }
    public function emailMessages()
    {
    }
}
