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
    public function __construct() // so important
    {
        $this->middleware('auth');
        //$this->middleware('auth',['only'=>['index','show',..]]); //just for number of methods;
        //$this->middleware('auth',['except'=>['index','show',..]]); //just for number of methods;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
