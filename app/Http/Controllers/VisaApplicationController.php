<?php

namespace App\Http\Controllers;

use App\Models\MailMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

class VisaApplicationController extends Controller
{
    public function firstPage(Request $request)
    {
        // session()->forget('phone');
        // session()->forget('application');
        // session()->forget('placeToStay');
        $phone = session()->get('phone');
        return view('user.firstPage', compact('phone'));
    }
    public function secondPage(Request $request)
    {
        session()->put('phone', $request->all());
        $application = session()->get('application');
        return view('user.secondPage', compact('application'));
    }
    public function thirdPage(Request $request)
    {
        session()->put('application', $request->all());
        $placeToStay = session()->get('placeToStay');
        return view('user.thirdPage', compact('placeToStay'));
    }
    public function previewPage(Request $request)
    {
        session()->put('placeToStay', $request->all());
        $phone = session()->get('phone');
        $application = session()->get('application');
        $placeToStay = session()->get('placeToStay');
        $passportImage = session()->get('passportImage');
        $personalImage = session()->get('personalImage');

        return view('user.previewPage', compact('phone', 'application', 'placeToStay', 'passportImage', 'personalImage'));
    }
    public function storeImages(Request $req)
    {

        $req->personal_picture->move(public_path('images'), 'personal_picture.jpeg');
        $req->passport_picture->move(public_path('images'), 'passport_picture.jpeg');
        $req->companion_passport_picture->move(public_path('images'), 'companion_passport_picture.jpeg');
        $req->companion_personal_picture->move(public_path('images'), 'companion_personal_picture.jpeg');
        return response()->json("storing images done");
    }
    public function saveApplication()
    {
        session()->forget('phone');
        session()->forget('application');
        session()->forget('placeToStay');
        MailMessages::create([
            "recieverEmail" => Auth::user()->email,
            "senderEmail" => 'Admin@gmail.com',
            "messages" => 'Well Done <br>
                        Your information has been submitted successfully <br>
                        You will receive in coming day invitation email with instructions from RS4IT to book your flight.
                        See you soon'
        ]);
        return view('user.finalPage');
    }
}
