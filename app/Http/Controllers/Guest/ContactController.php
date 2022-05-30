<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('guest.contact');
    }

    public function contactSend(){
        return view('guest.thanks');
    }
}
