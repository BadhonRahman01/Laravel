<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    //deposite money
    public function deposite()
    {
        return view('deposite');
    }
    public function resent()
    {
        
    }
    public function details($id)
    {
       $id = Crypt::decryptString($id);
       echo $id;
    }
    public function store(Request $request)
    {
       $password= Hash::make($request->password);
       echo $password;
    }
}
