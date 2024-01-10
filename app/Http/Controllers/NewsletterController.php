<?php

namespace App\Http\Controllers;

use App\Models\newsletter ;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'email' => 'required|max:255|unique:Newsletters|email',

        ]);


        $newletter = new newsletter();

        $newletter->email = $request->email;
        
        $newletter->save();



        return redirect()->back()->with('newsletter-message', 'Email successfully listed !');
        
    }
}
