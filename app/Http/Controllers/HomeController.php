<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

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


    //***User Section***/

    public function guestHome()
    {
        return view('guesttHome');
    }
    public function guideHome()
    {
        return view('guideHome');
    }
    
    
    public function officerHome()
    {
        return view('officerHome');
    }

}
