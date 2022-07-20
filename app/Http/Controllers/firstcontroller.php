<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Example\SecondController;
use Illuminate\Support\Facades\View;

class firstcontroller extends Controller
{
    //indext method
    public function index()
    {
        return view('about');
    }

    public function about_index()
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
    //Laravel method
    public function laravel(){
        // return view('laravel',['name' => 'laravel']);
        return View::make('laravel', ['name' => 'Badhon Hunter']);
    }
    //store contact
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:80',//|unique:users
            'password' => 'required|min:6|max:12',
        ]);
        
        \Log::channel('contactstore')->info('the contact form submitted by'.rand(1,20));
        return redirect()->back();
        //dd($request->all());
    }

}

