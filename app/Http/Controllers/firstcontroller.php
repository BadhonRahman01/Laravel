<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
