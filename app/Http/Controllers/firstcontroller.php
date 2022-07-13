<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Example\SecondController;

class firstcontroller extends Controller
{
    //indext method
    public function index()
    {
        return view('about');
    }
    public function country()
    {
        return 'Hello peps';
    }
    public function Studentstore(Request $request)
    {
        $date=array();
        $date['name'] = $request->name;
        $date['email'] = $request->email;
    // return redirect()->away('https://google.com');
        //return redirect()->action([SecondController::class, 'test']);
        return redirect()->back()->with('status', 'Profile Updated!');
    }
}

