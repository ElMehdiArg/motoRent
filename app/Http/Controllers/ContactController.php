<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

use function PHPUnit\Framework\returnSelf;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }



    public function message(Request $request)
    {

        $request->validate([
            '*' => 'required|max:2000',
            'email' => 'email',
        ], [
            'required' => 'this field is required !',
            'email' => 'this email is invalid !',
        ]);

        $data = array(
            'name'         => $request->full_name,
            'email'        => $request->email,
            'message'    => $request->message,
        );



        Mail::to("salut.ken19952@gmail.com")->send(new ContactMail($data));



        return response()->json(['success' => 'Thank you for getting in touch with us']);
    }
}
